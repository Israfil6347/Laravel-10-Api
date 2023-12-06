<?php

namespace App\Services;

use App\Repositories\Interfaces\PostRepositoryInterface;

class PostService{

    private $_postRepository;

    public function __construct(PostRepositoryInterface  $_postRepository){
        $this->_postRepository = _postRepository
    }
}