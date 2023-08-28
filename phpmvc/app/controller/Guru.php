<?php
class Guru extends Controller
{
    public function index()
    {
        $data=[
        "judul" => "Data Guru",
        "Guru" => $this->model('guru_model')->getAllguru()
        ];
        $this->view('template/header', $data);
        $this->view('Guru/index', $data);
        $this->view('template/footer');
        return $this->view("guru/index",$data);
}
}