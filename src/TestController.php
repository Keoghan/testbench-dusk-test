<?php

namespace TestbenchDuskTest;

class TestController extends \Illuminate\Routing\Controller
{
    public function __invoke()
    {
        return 'Hit Test Controller';
    }
}