@extends('content.app')
@section('title', 'Dashboard')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection
@section('content')
    <!-- Charts Row -->
        <div class="row g-4 mb-4">
        <div class="col-lg-4">
            <div class="chart-card">
                <div class="chart-header">
                    <h5 class="chart-title">Daily Report</h5>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <span class="legend-dot female"></span>
                            <span>Female</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-dot male"></span>
                            <span>Male</span>
                        </div>
                    </div>
                </div>
                <div class="bar-chart">
                    <div class="y-axis">
                        <span>2500</span>
                        <span>2000</span>
                        <span>1000</span>
                        <span>100</span>
                        <span>10</span>
                        <span>0</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 85%;"></div> <div class="bar male" style="height: 45%; animation-delay: 0.1s;"></div> </div>
                        <span class="bar-label">Sen</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 70%;"></div>
                            <div class="bar male" style="height: 80%; animation-delay: 0.15s;"></div>
                        </div>
                        <span class="bar-label">Sel</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 60%;"></div>
                            <div class="bar male" style="height: 75%; animation-delay: 0.2s;"></div>
                        </div>
                        <span class="bar-label">Rab</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 90%;"></div>
                            <div class="bar male" style="height: 95%; animation-delay: 0.25s;"></div>
                        </div>
                        <span class="bar-label">Kam</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 78%;"></div>
                            <div class="bar male" style="height: 25%; animation-delay: 0.3s;"></div>
                        </div>
                        <span class="bar-label">Jum</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 35%;"></div>
                            <div class="bar male" style="height: 55%; animation-delay: 0.35s;"></div>
                        </div>
                        <span class="bar-label">Sab</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 25%;"></div>
                            <div class="bar male" style="height: 30%; animation-delay: 0.4s;"></div>
                        </div>
                        <span class="bar-label">Min</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="chart-card">
                <div class="chart-header">
                    <h5 class="chart-title">Weekly Report</h5>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <span class="legend-dot female"></span>
                            <span>Female</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-dot male"></span>
                            <span>Male</span>
                        </div>
                    </div>
                </div>
                <div class="bar-chart">
                    <div class="y-axis">
                        <span>2500</span>
                        <span>2000</span>
                        <span>1000</span>
                        <span>100</span>
                        <span>10</span>
                        <span>0</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 82%;"></div>
                            <div class="bar male" style="height: 40%;"></div>
                        </div>
                        <span class="bar-label">Week 1</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 65%;"></div>
                            <div class="bar male" style="height: 78%;"></div>
                        </div>
                        <span class="bar-label">Week 2</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 45%;"></div>
                            <div class="bar male" style="height: 68%;"></div>
                        </div>
                        <span class="bar-label">Week 3</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 85%;"></div>
                            <div class="bar male" style="height: 90%;"></div>
                        </div>
                        <span class="bar-label">Week 4</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="chart-card">
                <div class="chart-header">
                    <h5 class="chart-title">Monthly Report</h5>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <span class="legend-dot female"></span>
                            <span>Female</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-dot male"></span>
                            <span>Male</span>
                        </div>
                    </div>
                </div>
                <div class="bar-chart" style="gap: 0.25rem;">
                    <div class="y-axis">
                        <span>2.5k</span>
                        <span>2k</span>
                        <span>1k</span>
                        <span>100</span>
                        <span>10</span>
                        <span>0</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 85%; width: 6px;"></div>
                            <div class="bar male" style="height: 40%; width: 6px;"></div>
                        </div>
                        <span class="bar-label">Jan</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 70%; width: 6px;"></div>
                            <div class="bar male" style="height: 75%; width: 6px;"></div>
                        </div>
                        <span class="bar-label">Feb</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 60%; width: 6px;"></div>
                            <div class="bar male" style="height: 68%; width: 6px;"></div>
                        </div>
                        <span class="bar-label">Mar</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 80%; width: 6px;"></div>
                            <div class="bar male" style="height: 88%; width: 6px;"></div>
                        </div>
                        <span class="bar-label">Apr</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 60%; width: 6px;"></div>
                            <div class="bar male" style="height: 15%; width: 6px;"></div>
                        </div>
                        <span class="bar-label">Mei</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 78%; width: 6px;"></div>
                            <div class="bar male" style="height: 10%; width: 6px;"></div>
                        </div>
                        <span class="bar-label">Jun</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 35%; width: 6px;"></div>
                            <div class="bar male" style="height: 40%; width: 6px;"></div>
                        </div>
                        <span class="bar-label">Jul</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 70%; width: 6px;"></div>
                            <div class="bar male" style="height: 70%; width: 6px;"></div>
                        </div>
                        <span class="bar-label">Agt</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 60%; width: 6px;"></div>
                            <div class="bar male" style="height: 35%; width: 6px;"></div>
                        </div>
                        <span class="bar-label">Sep</span>
                    </div>
                    <div class="bar-group">
                        <div class="bar-pair">
                            <div class="bar female" style="height: 70%; width: 6px;"></div>
                            <div class="bar male" style="height: 68%; width: 6px;"></div>
                        </div>
                        <span class="bar-label">Okt</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Stats Row -->
    <div class="row g-4 mb-4">
        <div class="col-md-6 col-lg-3">
            <div class="stats-card">
                <div class="stats-info">
                    <p>Total Users</p>
                    <h3>4500</h3>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="stats-card">
                <div class="stats-info">
                    <p>Female Users</p>
                    <h3>2000</h3>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-venus"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="stats-card">
                <div class="stats-info">
                    <p>Male Users</p>
                    <h3>2500</h3>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-mars"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="stats-card">
                <div class="stats-info">
                    <p>Average Time</p>
                    <h3>154.25</h3>
                </div>
                <div class="stats-icon">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="line-chart-card">
                <div class="chart-header">
                    <h5 class="chart-title">Average Users Sleep Time</h5>
                    <div class="chart-legend" style="flex-direction: row; gap: 1rem;">
                        <div class="legend-item">
                            <span class="legend-dot female" style="width: 12px; height: 12px;"></span>
                            <span>Female</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-dot male" style="width: 12px; height: 12px;"></span>
                            <span>Male</span>
                        </div>
                    </div>
                </div>
                <div class="line-chart-container">
                    <div class="chart-grid">
                        <div class="grid-line"><span>10j</span></div>
                        <div class="grid-line"><span>8j</span></div>
                        <div class="grid-line"><span>6j</span></div>
                        <div class="grid-line"><span>4j</span></div>
                        <div class="grid-line"><span>2j</span></div>
                    </div>
                    <div class="x-axis-labels">
                        <span>Jan 01</span>
                        <span>Jan 02</span>
                        <span>Jan 03</span>
                        <span>Jan 04</span>
                        <span>Jan 05</span>
                        <span>Jan 06</span>
                    </div>
                    <svg class="line-chart-svg" preserveAspectRatio="none" viewBox="0 0 1000 300">
                        <polyline fill="none" points="0,260 150,250 200,240 250,140 350,160 500,190 600,140 700,200 800,100 900,150 1000,100" stroke="#ec4899" stroke-width="2" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));"></polyline>
                        <polyline fill="none" points="0,190 180,210 250,220 350,190 450,220 550,140 650,200 750,130 850,180 950,150 1000,140" stroke="#3b82f6" stroke-width="2" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection