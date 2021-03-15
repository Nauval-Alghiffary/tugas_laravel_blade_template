@extends('layout.app')
@section('title', 'Halaman Home')
@section('content')
<div class="judull"></div>
        <h1 id="judul" >Latihan Blade Template</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
              <div class="col-md" id="utama" style="background-color: #fdcb6e; text-align: center; height: 700px; padding: 30px">
                <h3>contoh isi</h3>
                <a href="#list"><button type="button" class="btn btn-light" id="tombolList">List of Content</button></a>
                <i class="fas fa-car-side fa-3x" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-out-right"></i>
              </div>
            </div>
            <div class="row">
                <div class="col-md" id="list" style="background-color:  #a29bfe; text-align: center; height: 700px; padding: 30px">
                  <h3>list of content</h3>
                  <a href="#page1"><button type="button" class="btn btn-light" id="nextpg">ke page selanjutnya</button></a>
                </div>
              </div>
              <div class="row">
                <div class="col" id="page1" style="background-color:  #fab1a0; text-align: center; height: 700px; padding: 30px">
                  <h3>page 1</h3>
                  <a href="#page2"><button type="button" class="btn btn-light" >ke page selanjutnya</button></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md" id="page2" style="background-color: #fdcb6e; text-align: center; height: 700px; padding: 30px">
                  <h3>page 2</h3>
                  <a href="#page3"><button type="button" class="btn btn-light" >ke page selanjutnya</button></a>
                </div>
              </div>
              <div class="row">
                  <div class="col-md" id="page3" style="background-color:  #a29bfe; text-align: center; height: 700px; padding: 30px">
                    <h3>page 3</h3>
                    <a href="#page4"><button type="button" class="btn btn-light" >ke page selanjutnya</button></a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md" id="page4" style="background-color:  #fab1a0; text-align: center; height: 700px; padding: 30px">
                    <h3>page 4</h3>
                    <a href="#page5"><button type="button" class="btn btn-light" >ke page selanjutnya</button></a>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md" id="page5" style="background-color: #fdcb6e; text-align: center; height: 700px; padding: 30px">
                      <h3>page 5</h3>
                      <a href="#page6"><button type="button" class="btn btn-light" >ke page selanjutnya</button></a>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md" id="page6" style="background-color:  #a29bfe; text-align: center; height: 700px; padding: 30px">
                        <h3>page 6</h3>
                        <a href="#list"><button type="button" class="btn btn-light" >ke list of content</button></a>
                      </div>
                    </div>
              
          </div>
       
@stop