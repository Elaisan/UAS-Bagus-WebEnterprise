@extends('content.app')
@section('title', 'Report')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/report.css') }}">
@endsection
@section('content')
    <div class="row g-4 mb-4">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card">
                <h3>Total Users</h3>
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-icon">
                        <span class="material-icons-outlined" style="font-size: 2.5rem; font-weight: 300;">person_outline</span>
                    </div>
                    <span class="stat-value">4500</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card">
                <h3>Insomnia Cases</h3>
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-icon">
                        <span class="material-icons-outlined" style="font-size: 2.5rem; font-weight: 300; color: var(--primary);">person_outline</span>
                    </div>
                    <span class="stat-value">900</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card">
                <h3>Time to Sleep</h3>
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-icon">
                        <span class="material-icons-outlined" style="font-size: 2.5rem; font-weight: 300;">schedule</span>
                    </div>
                    <span class="stat-value">90 min</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card">
                <h3>Average Sleep Time</h3>
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-icon">
                        <span class="material-icons-outlined" style="font-size: 2.5rem; font-weight: 300;">schedule</span>
                    </div>
                    <span class="stat-value">5.2 h</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <div class="chart-card">
                <div class="d-flex justify-content-end mb-3 align-items-center">
                    <select class="dropdown-btn period-select" style="width: auto; cursor: pointer;">
                        <option value="daily">Daily</option>
                        <option value="weekly" selected>Weekly</option>
                        <option value="monthly">Monthly</option>
                    </select>
                </div>

                <div class="chart-content">
                    
                    <div class="chart-view daily-chart" style="display: none;">
                        <div class="chart-container">
                            <button class="date-range-btn">
                                18 Agustus 2023
                                <span class="material-icons-round" style="font-size: 0.875rem; vertical-align: middle;">expand_more</span>
                            </button>
                            <h3 class="h5 mb-4" style="color: #D1D5DB;">Hourly Users</h3>
                            
                            <div class="y-axis">
                                <span>100</span>
                                <span>80</span>
                                <span>60</span>
                                <span>40</span>
                                <span>20</span>
                                <span>0</span>
                            </div>
                            <div class="chart-bars">
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 15%;"></div>
                                    <span class="bar-label">22:00</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 30%;"></div>
                                    <span class="bar-label">23:00</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar active" style="height: 60%;"></div>
                                    <span class="bar-label">00:00</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar active" style="height: 85%;"></div>
                                    <span class="bar-label">01:00</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar active" style="height: 50%;"></div>
                                    <span class="bar-label">02:00</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 30%;"></div>
                                    <span class="bar-label">03:00</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 10%;"></div>
                                    <span class="bar-label">04:00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart-view weekly-chart">
                        <div class="chart-container">
                            <button class="date-range-btn">
                                12 - 18 Agustus 2023
                                <span class="material-icons-round" style="font-size: 0.875rem; vertical-align: middle;">expand_more</span>
                            </button>
                            <h3 class="h5 mb-4" style="color: #D1D5DB;">Weekly Users</h3>
                            
                            <div class="y-axis">
                                <span>2.5k</span>
                                <span>2k</span>
                                <span>1.5k</span>
                                <span>1k</span>
                                <span>500</span>
                                <span>0</span>
                            </div>
                            <div class="chart-bars">
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 45%;"></div>
                                    <span class="bar-label">Sen</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 65%;"></div>
                                    <span class="bar-label">Sel</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 35%;"></div>
                                    <span class="bar-label">Rab</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar active" style="height: 85%;"></div>
                                    <span class="bar-label">Kam</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar active" style="height: 70%;"></div>
                                    <span class="bar-label">Jum</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 30%;"></div>
                                    <span class="bar-label">Sab</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 20%;"></div>
                                    <span class="bar-label">Min</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chart-view monthly-chart" style="display: none;">
                        <div class="chart-container">
                            <button class="date-range-btn">
                                Tahun 2023
                                <span class="material-icons-round" style="font-size: 0.875rem; vertical-align: middle;">expand_more</span>
                            </button>
                            <h3 class="h5 mb-4" style="color: #D1D5DB;">Monthly Users</h3>
                            
                            <div class="y-axis">
                                <span>10k</span>
                                <span>8k</span>
                                <span>6k</span>
                                <span>4k</span>
                                <span>2k</span>
                                <span>0</span>
                            </div>
                            <div class="chart-bars" style="gap: 0.5rem;"> 
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 40%; width: 6px;"></div>
                                    <span class="bar-label">Jan</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 55%; width: 6px;"></div>
                                    <span class="bar-label">Feb</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 45%; width: 6px;"></div>
                                    <span class="bar-label">Mar</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar active" style="height: 80%; width: 6px;"></div>
                                    <span class="bar-label">Apr</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 30%; width: 6px;"></div>
                                    <span class="bar-label">Mei</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 25%; width: 6px;"></div>
                                    <span class="bar-label">Jun</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 60%; width: 6px;"></div>
                                    <span class="bar-label">Jul</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar active" style="height: 75%; width: 6px;"></div>
                                    <span class="bar-label">Agt</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 50%; width: 6px;"></div>
                                    <span class="bar-label">Sep</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 65%; width: 6px;"></div>
                                    <span class="bar-label">Okt</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 45%; width: 6px;"></div>
                                    <span class="bar-label">Nov</span>
                                </div>
                                <div class="bar-wrapper">
                                    <div class="bar" style="height: 55%; width: 6px;"></div>
                                    <span class="bar-label">Des</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="alert-card">
                <h2 class="h5 text-center mb-4">Alert Insomnia Terbaru</h2>
                <div class="alert-list">
                    <div class="alert-item">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="alert-date">15 Agustus 2023</span>
                            <span class="alert-time">15 menit yang lalu</span>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0 mt-1">
                                <span class="material-icons-outlined alert-icon">notifications_active</span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <span style="font-size: 1.125rem;">😁</span>
                                    <span class="alert-user">User ID #12388</span>
                                </div>
                                <div class="d-flex align-items-center gap-1 mb-2">
                                    <span class="material-icons-round" style="color: var(--primary); font-size: 0.75rem;">schedule</span>
                                    <div class="alert-duration">
                                        Average Durasi tidur<br>
                                        <span style="color: white; font-weight: 600;">1 Jam 35 Menit</span>
                                    </div>
                                </div>
                                <p class="alert-message mb-0">Tidak Tidur selama 36 jam terakhir</p>
                            </div>
                        </div>
                    </div>

                    <div class="alert-item">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="alert-date">14 Agustus 2023</span>
                            <span class="alert-time">1 hari yang lalu</span>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0 mt-1">
                                <span class="material-icons-outlined alert-icon">notifications_active</span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <span style="font-size: 1.125rem;">😄</span>
                                    <span class="alert-user">User ID #16902</span>
                                </div>
                                <div class="d-flex align-items-center gap-1 mb-2">
                                    <span class="material-icons-round" style="color: var(--primary); font-size: 0.75rem;">schedule</span>
                                    <div class="alert-duration">
                                        Average Durasi tidur<br>
                                        <span style="color: white; font-weight: 600;">1 Jam 20 Menit</span>
                                    </div>
                                </div>
                                <p class="alert-message mb-0">Tidak Tidur selama 20 jam terakhir</p>
                            </div>
                        </div>
                    </div>

                    <div class="alert-item">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="alert-date">13 Agustus 2023</span>
                            <span class="alert-time">2 hari yang lalu</span>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0 mt-1">
                                <span class="material-icons-outlined alert-icon">notifications_active</span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <span style="font-size: 1.125rem;">😅</span>
                                    <span class="alert-user">User ID #12402</span>
                                </div>
                                <div class="d-flex align-items-center gap-1 mb-2">
                                    <span class="material-icons-round" style="color: var(--primary); font-size: 0.75rem;">schedule</span>
                                    <div class="alert-duration">
                                        Average Durasi tidur<br>
                                        <span style="color: white; font-weight: 600;">55 Menit</span>
                                    </div>
                                </div>
                                <p class="alert-message mb-0">Tidak Tidur selama 27 jam terakhir</p>
                            </div>
                        </div>
                    </div>

                    <div class="alert-item">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="alert-date">12 Agustus 2023</span>
                            <span class="alert-time">3 hari yang lalu</span>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0 mt-1">
                                <span class="material-icons-outlined alert-icon">notifications_active</span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <span style="font-size: 1.125rem;">😅</span>
                                    <span class="alert-user">User ID #12455</span>
                                </div>
                                <div class="d-flex align-items-center gap-1 mb-2">
                                    <span class="material-icons-round" style="color: var(--primary); font-size: 0.75rem;">schedule</span>
                                    <div class="alert-duration">
                                        Average Durasi tidur<br>
                                        <span style="color: white; font-weight: 600;">1 Jam 1 Menit</span>
                                    </div>
                                </div>
                                <p class="alert-message mb-0">Tidak Tidur selama 38 jam terakhir</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const periodSelects = document.querySelectorAll('.period-select');
        periodSelects.forEach(select => {
            select.addEventListener('change', function() {
                const selectedPeriod = this.value;
                const card = this.closest('.chart-card');
                const allCharts = card.querySelectorAll('.chart-view');
                allCharts.forEach(chart => {
                    chart.style.display = 'none';
                });
                const targetChart = card.querySelector(`.${selectedPeriod}-chart`);
                if (targetChart) {
                    targetChart.style.display = 'block';
                    targetChart.style.animation = 'none';
                    targetChart.offsetHeight;
                    targetChart.style.animation = null; 
                }
            });
        });
    });
</script>
@endsection