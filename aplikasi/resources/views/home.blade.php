@extends('template/v_index')
@section('title', 'SIKAT v0.0.1')
@section('sidebar')
    @parent

   <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label">
                      <!--notifications<b class="label rounded label-sm primary">4</b>-->
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'../assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Kepegawaian</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="{!! url('kepegawaian/daftarPegawai') !!}" >            
                        <span class="nav-text">Daftar Data</span>
                      </a>
                    </li>
                    <li>
                      <!--<a href="{!! url('coba') !!}" >-->
                      <a href="{!! url('kepegawaian/coba') !!}" > 
                        <span class="nav-text">Coba</span>
                      </a>
                    </li><!-- tambah sub menu
                    <li>
                      <a href="calendar.html" >
                        <span class="nav-text">Calendar</span>
                      </a>
                    </li>-->
                  </ul>
                </li>
@endsection
@section('content')
Ini adalah halaman home...
@endsection