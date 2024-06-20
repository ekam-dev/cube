<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Home Controller
 *
 */
class HomeController extends CubeController
{
    public function index()
    {
        $Panel = $this->getTableLocator()->get('Panel');
        $panels = $Panel->find('all', order: ['created' => 'desc']);
        $panels = $this->paginate($panels);
        $this->set(compact('panels'));
        $this->render('home');
    }

    public function view($id)
    {
        $Panel = $this->getTableLocator()->get('Panel');
        $panel = $Panel->get($id);

        $this->set(compact('panel'));
    }

    public function add()
    {
        $Panel = $this->getTableLocator()->get('Panel');
        $panel = $Panel->newEmptyEntity();
        if ($this->request->is('post')) :

            $panel = $Panel->patchEntity($panel, $this->request->getData(), ['validate' => true]);
            if ($this->request->getData('simple_file')->getSize() > 0) :
                $file = $this->request->getData('simple_file');
                if (!is_dir(WWW_ROOT . 'docs')) :
                    mkdir(WWW_ROOT . 'docs', 0755, true);
                endif;
                $path = WWW_ROOT . 'docs' . DS . $file->getClientFilename();
                $file->moveTo($path);
                $panel->file = DS . 'docs' . DS . $file->getClientFilename();
            endif;
            if ($this->request->getData('pdf_file')->getSize() > 0) :
                $file = $this->request->getData('pdf_file');
                if (!is_dir(WWW_ROOT . 'docs')) :
                    mkdir(WWW_ROOT . 'docs', 0755, true);
                endif;
                $path = WWW_ROOT . 'docs' . DS . $file->getClientFilename();
                $file->moveTo($path);
                $panel->docs_file = DS . 'docs' . DS . $file->getClientFilename();
            endif;

            if ($Panel->save($panel)) :
                $this->redirect(['action' => "index"]);
                $this->Flash->success('Record Successfully');
            else :
                $this->Flash->error('Record Not Saved!');
            endif;

        endif;

        $this->set(compact('panel'));
    }

    public function edit($id)
    {
        $Panel = $this->getTableLocator()->get('Panel');
        $panel = $Panel->get($id);
        if ($this->request->is('put')) :

            $panel = $Panel->patchEntity($panel, $this->request->getData(), ['validate' => true]);
            if ($this->request->getData('simple_file')->getSize() > 0) :
                $file = $this->request->getData('simple_file');
                if (!is_dir(WWW_ROOT . 'docs')) :
                    mkdir(WWW_ROOT . 'docs', 0755, true);
                endif;
                if (file_exists(WWW_ROOT . 'docs' . DS . $panel->file)) :
                    unlink($panel->file);
                endif;
                $path = WWW_ROOT . 'docs' . DS . $file->getClientFilename();
                $file->moveTo($path);
                $panel->file = DS . 'docs' . DS . $file->getClientFilename();
            endif;
            if ($this->request->getData('pdf_file')->getSize() > 0) :
                $file = $this->request->getData('pdf_file');
                if (!is_dir(WWW_ROOT . 'docs')) :
                    mkdir(WWW_ROOT . 'docs', 0755, true);
                endif;
                if (file_exists(WWW_ROOT . 'docs' . DS . $panel->docs_file)) :
                    unlink($panel->docs_file);
                endif;
                $path = WWW_ROOT . 'docs' . DS . $file->getClientFilename();
                $file->moveTo($path);
                $panel->docs_file = DS . 'docs' . DS . $file->getClientFilename();
            endif;

            if ($Panel->save($panel)) :
                $this->redirect(['action' => "index"]);
                $this->Flash->success('Record Saved');
            else :
                $this->redirect(['action' => "index"]);
                $this->Flash->success('Nothing Changed');
            endif;

        endif;

        $this->set(compact('panel'));
    }

    public function delete($id)
    {
        if ($this->request->is('post')) :
            $Panel = $this->getTableLocator()->get('Panel');
            $panel = $Panel->get($id);
            if (!is_null($panel->file) && file_exists(WWW_ROOT . $panel->file)) :
                unlink(WWW_ROOT . $panel->file);
            endif;
            if (!is_null($panel->docs_file) && file_exists(WWW_ROOT . $panel->docs_file)) :
                unlink(WWW_ROOT . $panel->docs_file);
            endif;
            if ($Panel->delete($panel)) :
                $this->redirect(['action' => 'index']);
                $this->Flash->success('Record Deleted Successfully!');
            else :
                $this->redirect(['action' => 'index']);
                $this->Flash->error('Record Not Deleted!');
            endif;
        endif;
    }
}
