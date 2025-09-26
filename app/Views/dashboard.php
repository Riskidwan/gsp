<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <h3>Profile Statistics</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldDocument"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">berita</h6>
                                    <h6 class="font-extrabold mb-0"><?= $total_berita; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldWork"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Loker</h6>
                                    <h6 class="font-extrabold mb-0"><?= $total_loker; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Pelamar</h6>
                                    <h6 class="font-extrabold mb-0"><?= $total_lamaran; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldUser"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Akun</h6>
                                    <h6 class="font-extrabold mb-0"><?= $total_akun; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Chart Pelamar -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Grafik Pelamar per Bulan & Posisi</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-pelamar"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="<?= base_url('assets/compiled/jpg/1.jpg'); ?>" alt="User">
                        </div>
                        <div class="ms-3 name">
                            <!-- Username -->
                            <h5 class="font-bold"><?= esc($username); ?></h5>
                            <!-- Role -->
                            <h6 class="text-muted mb-0">@<?= esc($role); ?></h6>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card">
    <div class="card-header">
        <h4>Visitors Profile</h4>
    </div>
    <div class="card-body d-flex justify-content-center">
        <div id="chart-visitors-profile"></div>
    </div>
</div>
        </div>
    </section>
</div>

<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2025 &copy; PT Gemilang Sapta Perdana</p>
        </div>

    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    console.log("Series:", <?= $chart_posisi ?>);
    console.log("Categories:", <?= $chart_bulan ?>);

    // Chart Pelamar
    var bulan = <?= $chart_bulan ?>;
    var total = <?= $chart_total ?>;
    var breakdown = <?= $chart_breakdown ?>;
    var options = {
        chart: {
            type: 'bar',
            height: 350
        },
        series: [{
            name: 'Total Pelamar',
            data: <?= $chart_total ?>
        }],
        xaxis: {
            categories: <?= $chart_bulan ?>
        },
        colors: ['#007bff'], // semua batang warna biru
        tooltip: {
            custom: function({
                series,
                seriesIndex,
                dataPointIndex,
                w
            }) {
                let breakdown = <?= $chart_breakdown ?>;
                return '<div style="padding:10px;">' +
                    '<b>Total: ' + series[seriesIndex][dataPointIndex] + '</b><br>' +
                    breakdown[dataPointIndex] +
                    '</div>';
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart-pelamar"), options);
    chart.render();
    // var options = {
    //     series: [{
    //         name: 'Total Pelamar',
    //         data: total
    //     }],
    //     chart: {
    //         type: 'bar',
    //         height: 400
    //     },
    //     colors: ['#1E90FF'], // biru saja
    //     xaxis: {
    //         categories: bulan
    //     },
    //     yaxis: {
    //         title: {
    //             text: "Jumlah Pelamar"
    //         }
    //     },
    //     tooltip: {
    //         custom: function({series, seriesIndex, dataPointIndex, w}) {
    //             let bulanIndex = dataPointIndex;
    //             let detail = breakdown[bulanIndex];
    //             let html = "<div><strong>Total: " + total[bulanIndex] + "</strong><br/>";
    //             for (let posisi in detail) {
    //                 html += posisi + ": " + detail[posisi] + "<br/>";
    //             }
    //             html += "</div>";
    //             return html;
    //         }
    //     }
    // };

    // var chart = new ApexCharts(document.querySelector("#chart-pelamar"), options);
    // chart.render();


    // Chart Visitor (donut contoh statis)
    // var optionsDonut = {
    //     series: [70, 30],
    //     labels: ["Male", "Female"],
    //     chart: {
    //         type: 'donut',
    //         height: 350
    //     }
    // };

    var optionsVisitorsProfile = {
        series: <?= $donut_series ?>, // data jumlah pelamar
        labels: <?= $donut_labels ?>, // nama posisi
        chart: {
            type: 'donut',
            width: '100%',
            height: 350
        },
        legend: {
            position: 'bottom'
        }
    };

    var chartVisitorsProfile = new ApexCharts(document.querySelector("#chart-visitors-profile"), optionsVisitorsProfile);
    chartVisitorsProfile.render();
</script>

<?= $this->endSection(); ?>