<?php

namespace SON\Framework;

abstract class CrudController
{
    protected abstract function getModel(): string;

    public function index($container)
    {   
        return $container[$this->getModel()]->all();
    }

    public function show($container, $request)
    {
        
        return $container[$this->getModel()]->get(['id' => $request->attributes->get(1)]);
    }

    public function create($container, $request)
    {
        return $container[$this->getModel()]->create($request->request->all());
    }

    public function update($container, $request)
    {
        return $container[$this->getModel()]->update(['id' => $request->attributes->get(1)], $request->request->all());
    }
    
    public function delete($container, $request)
    {
        return $container[$this->getModel()]->delete(['id' => $request->attributes->get(1)]);
    }
}