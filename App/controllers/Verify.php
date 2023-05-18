<?php
class Verify
{
    use Controller;
    public function index()
    {
        $this->view('Verify/index');
    }
    public function Verification()
    {
        $this->view('Verify/verify');
    }
 
}
