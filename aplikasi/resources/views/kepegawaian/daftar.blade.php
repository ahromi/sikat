@extends('../template/v_index')
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
                      <a href="/kepegawaian/daftar" >
                        <span class="nav-text">Daftar Data</span>
                      </a>
                    </li>
                    <li>
                      <a href="coba" >
                        <span class="nav-text">Contacts</span>
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
<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>Daftar Data Kepegawaian</h2>
    </div>
    <div class="table-responsive">
      <table ui-jp="dataTable" class="table table-striped b-t b-b">
        <thead>
          <tr>
            <th style="width:10%">No. </th>
            <th style="width:35%">Nama</th>
            <th style="width:25%">Fungsi</th>
            <th style="width:15%">Posisi</th>
            <th style="width:15%">CSS grade</th>
          </tr>
          <?php $no=1; ?>
          <?php foreach ($t_employee as $data){ ?>
          <tr>
          	<td>{{ $no++ }}</td>
          	<td>{{ $data->name }}</td>
          	<td>{{ $data->dep }}</td>
          	<td>{{ $data->des }}</td>
				<td>{{ $data->nat }}</td>
          </tr>
          <?php } ?>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection