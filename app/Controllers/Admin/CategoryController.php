<?php
// CategoryController.php

require_once CORE.'/Controller.php';
require_once MODELS.'/Category.php';
require_once CORE.'/Helper.php';

// version 1
class CategoryController1 extends Controller
{
    private $fileName = '';
    protected $category;

    public function index()
    {
        $title = 'Categories List';
        $categories = (new Category())->all();
        $this->view->render('admin/categories/index', compact('title', 'categories'), 'admin');
    }

    public function create()
    {
        $title = 'Add New Category';
        $this->view->render('admin/categories/create', compact('title'), 'admin');
    }

    private function check_file_array($file) {
        return isset($file['error'])
            && !empty($file['name'])
            && !empty($file['type'])
            && !empty($file['tmp_name'])
            && !empty($file['size']);
    }

    private function upload($file) 
    {
        $filename = '';
        if($this->check_file_array($file)) {
            if(is_uploaded_file($file["tmp_name"])) {
                $filename = sha1(mt_rand(1, 9999).$file['name'].uniqid()).time();
                move_uploaded_file($file["tmp_name"], Helper::asset('images/categories/', $filename));
                return $filename;
            }
        }
        return $filename;
    }


    public function store()
    {
        $status = $this->request->data['status'] ? 1:0;
        if (!empty($this->request->data['image'])) {
            $file = $this->request->data['image'];
            $this->fileName = $this->upload($file);
        }
        (new Category())->save(
           [
                'name'=>$this->request->data['name'], 
                'status'=>$status, 
                "image"=>$this->fileName
            ]);
        $this->redirector->redirect("/admin/categories");
    }

    public function show($vars)
    {
        extract($vars);
        $title = 'Category Detail';
        $category = (new Category())->getByPK($id);
        $this->view->render('admin/categories/show', compact('title', 'category'), 'admin');
    }

    public function edit($vars)
    {
        $title = 'Edit Category';
        extract($vars);
        $category = (new Category())->getByPK($id);
        $this->view->render('admin/categories/edit', compact('title', 'category'), 'admin');
    }

    public function update()
    {
        $status = $this->request->data['status'] ? 1:0;
        $this->category = new Category();
        $category = $this->category->getByPK($this->request->data['id']);
        
        if (!empty($this->request->data['image'])) {
            $imageName = Helper::asset('images/categories/', $category->image);
            if(file_exists($imageName)){
                unlink($imageName);
            }
            $file = $this->request->data['image'];
            $this->fileName = $this->upload($file);
        }
        $this->category->update($this->request->data['id'], ['name'=>$this->request->data['name'], 'status'=>$status, "image"=>$this->fileName]);
        $this->redirector->redirect("/admin/categories");
    }

    public function delete($vars)
    {
        extract($vars);
        $this->category = new Category();
        $category = $this->category->getByPK($id);
        
        if (isset($this->request->data['submit'])) {
            $imageName = Helper::asset('images/categories/', $category->image);
            if(file_exists($imageName)){
                unlink($imageName);
            }
            $this->category->destroy($id);
            $this->redirector->redirect("/admin/categories");
        } elseif (isset($this->request->data['reset'])) {
            $this->redirector->redirect("/admin/categories");
        }
        $title = 'Delete Category ';
        $this->view->render('admin/categories/delete', compact('title', 'category'), 'admin');
    }
}

// version 2

class CategoryController extends Controller
{
    private $fileName = '';
    protected $category;

    public function index()
    {
        $title = 'Categories List';
        $categories = (new Category())->all();
        $this->view->render('admin/categories/index', compact('title', 'categories'), 'admin');
    }

    public function create()
    {
        $title = 'Add New Category';
        $resource = Category::getResource();
        $this->view->render('admin/categories/create', compact('title', 'resource'), 'admin');
    }

    private function fileName($fileContent){
        // $image_array_1 = explode(";", $fileContent);
        // $image_array_2 = explode(",", $image_array_1[1]);
        // $fileContent = base64_decode($image_array_2[1]);

        $image = explode(";", $fileContent);
        $image = explode(",", array_pop($image));
        $fileContent = base64_decode(array_pop($image));

        return [$fileContent, sha1(mt_rand(1, 9999) . uniqid()) . time()];
    }

    // insert image
    public function insertImage() {
        if (!empty($this->request->data['image'])) {
            list($fileContent, $filename) =$this->fileName($this->request->data['image']);
            $uploaded = Helper::asset('images/categories/', $filename);
            file_put_contents($uploaded, $fileContent);
        }   
        echo $filename;
    }

    public function store()
    {
        $status = $this->request->data['status'] ? 1:0;
        (new Category())->save(
            [
                'name'=>$this->request->data['name'], 
                'status'=>$status, 
                "image"=>$this->request->data['file_name']
            ]);
        $this->redirector->redirect("/admin/categories");
    }

    public function show($vars)
    {
        extract($vars);
        $title = 'Category Detail';
        $category = (new Category())->getByPK($id);
        $this->view->render('admin/categories/show', compact('title', 'category'), 'admin');
    }

    public function edit($vars)
    {
        $title = 'Edit Category';
        extract($vars);
        $category = (new Category())->getByPK($id);
        $resource = Category::getResource();
        $this->view->render('admin/categories/edit', compact('title', 'category', 'resource'), 'admin');
    }

    public function update()
    {
        $status = $this->request->data['status'] ? 1:0;
        $this->category = new Category();
        $category = $this->category->getByPK($this->request->data['id']);

        if (!empty($this->request->data['image'])) {
            $imageName = Helper::asset('images/categories/', $category->image);
            if(file_exists($imageName)){
                unlink($imageName);
            }
        }
        $this->category->update($this->request->data['id'], 
            [
                'name'=>$this->request->data['name'], 
                'status'=>$status, 
                "image"=>$this->request->data['file_name']
            ]);

        $this->redirector->redirect("/admin/categories");
    }

    public function delete($vars)
    {
        extract($vars);
        $this->category = new Category();
        $category = $this->category->getByPK($id);
        
        if (isset($this->request->data['submit'])) {
            $imageName = Helper::asset('images/categories/', $category->image);
            if(file_exists($imageName)){
                unlink($imageName);
            }
            $this->category->destroy($id);
            $this->redirector->redirect("/admin/categories");
        } elseif (isset($this->request->data['reset'])) {
            $this->redirector->redirect("/admin/categories");
        }
        $title = 'Delete Category ';
        $this->view->render('admin/categories/delete', compact('title', 'category'), 'admin');
    }
}
