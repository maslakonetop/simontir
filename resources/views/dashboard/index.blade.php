@extends('layout.template')

@section('konten')
    {{-- <img src="/images/welcome.png" alt="body" class="img-fluid"> --}}
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Infografis</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="position-relative p-3 bg-info" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-lg">
                          <div class="ribbon bg-warning">
                            Rekening
                          </div>
                        </div>
                        <h6>Data Rekening</h6>
                        <p>Jumlah Rekening Aktif : {{ $rekening }} rekening</p>
                        <p>Total Nilai Anggaran  : Rp. {{ number_format($totrek,2,',','.')  }}</p>
                        <p>Jumlah Pejabat Pelaksana Teknis Kegiatan : {{ $pptk }} orang</p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="position-relative p-3 bg-warning" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-lg">
                          <div class="ribbon bg-danger">
                            Task
                          </div>
                        </div>
                        <h6>Task dan Bobot</h6>
                        <p>Jumlah Task : </p>
                        <p>Jumlah Task Selesai : </p>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="position-relative p-3 bg-success" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-lg">
                          <div class="ribbon bg-info">
                            Progres
                          </div>
                        </div>
                        <h6>Progres Kegiatan</h6>
                        <p>Jumlah Progress Berjalan :</p>
                        <p>Jumlah Progress Selesai :</p>
                      </div>
                    </div>
                  </div>                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-md-6">
                <!-- AREA CHART -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Anggaran Per Rekening</h3>
                  </div>
                  <div class="card-body">
                    <div id="anggaran" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->   
              </div>
              <div class="col-md-6">
                <!-- LINE CHART -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Progress Kegiatan Per Rekening</h3>   
                    </div>
                  <div class="card-body">
                      <div id="rekening" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
	 
			function drawChart() {
	 
			var data = google.visualization.arrayToDataTable([
				['Kode Rekening', 'Anggaran'],
	 
					@php
					foreach($data as $d) {
						echo "['".$d->koderekening."', ".$d->anggaran."],";
					}
					@endphp
			]);
	 
			  var options = {
				title: 'Anggaran Per Rekening',
				is3D: false,
        pieHole: 0.4,
			  };
	 
			  var chart = new google.visualization.PieChart(document.getElementById('anggaran'));
	 
			  chart.draw(data, options);
			}
    </script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
	 
			function drawChart() {
	 
			var data = google.visualization.arrayToDataTable([
				['Kode Rekening', 'Anggaran'],
	 
					@php
					foreach($data as $d) {
						echo "['".$d->koderekening."', ".$d->anggaran."],";
					}
					@endphp
			]);
	 
			  var options = {
				title: 'Progres Per Rekening',
				is3D: false,
			  };
	 
			  var chart = new google.visualization.LineChart(document.getElementById('rekening'));
	 
			  chart.draw(data, options);
			}
    </script>
@endsection