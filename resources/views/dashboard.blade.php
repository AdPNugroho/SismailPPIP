@extends('template')
@section('nav')
<nav id="primary-nav">
    <ul>
        <li>
            <a href="index.php" class="active"><i class="gi gi-building"></i>Dashboard</a>
        </li>
        <li>
            <a href="bidang_disposisi"><i class="fa fa-user"></i>Data BD</a>
        </li>
        <li>
            <a href="disposisi"><i class="fa fa-archive"></i>Data Disposisi</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-th-list"></i>Surat</a>
            <ul>
                <li>
                    <a href="surat_masuk"><i class="gi gi-message_in"></i>Surat Masuk</a>
                </li>
                <li>
                    <a href="surat_keluar"><i class="gi gi-message_out"></i>Surat Keluar</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="page_login.php"><i class="fa fa-power-off"></i>Log Out</a>
        </li>
    </ul>
</nav>
@endsection
@section('content')
                <ul id="nav-info" class="clearfix">
                    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <li class="active"><a href="index.php">Dashboard</a></li>
                </ul>
                <ul class="nav-dash">
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Data BD" class="animation-fadeIn">
                            <i class="fa fa-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Disposisi" class="animation-fadeIn">
                            <i class="fa fa-archive"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Inbox" class="animation-fadeIn">
                            <i class="gi gi-message_in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Outbox" class="animation-fadeIn">
                            <i class="gi gi-message_out"></i>
                        </a>
                    </li>
                </ul>
                <div class="dash-tiles row">
                    <div class="col-sm-6">
                        <div class="dash-tile dash-tile-ocean clearfix animation-pullDown">
                            <div class="dash-tile-header">
                                <div class="dash-tile-options">
                                    <div class="btn-group">
                                        <a href="surat_masuk" class="btn btn-default" data-toggle="tooltip" title="Manage Surat Keluar"><i class="gi gi-download_alt"></i></a>
                                    </div>
                                </div>
                                Total Surat Keluar
                            </div>
                            <div class="dash-tile-icon"><i class="fa fa-users"></i></div>
                            <div class="dash-tile-text">654.455</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="dash-tile dash-tile-ocean clearfix animation-pullDown">
                            <div class="dash-tile-header">
                                <div class="dash-tile-options">
                                    <div class="btn-group">
                                        <a href="surat_masuk" class="btn btn-default" data-toggle="tooltip" title="Manage Surat Masuk"><i class="gi gi-download_alt"></i></a>
                                    </div>
                                </div>
                                Total Surat Masuk
                            </div>
                            <div class="dash-tile-icon"><i class="fa fa-users"></i></div>
                            <div class="dash-tile-text">1.233.423</div>
                        </div>
                    </div>
                </div>
                <div class="dash-tiles row">
                    <div class"col-sm-12">
                        <div class="dash-tile dash-tile-2x animation-pullDown">
                            <div class="dash-tile-header">
                                Grafik Statistik Harian Surat
                            </div>
                            <div class="dash-tile-content">
                                <h1>Test</h3>
                            </div>
                        </div>
                    </div>
                </div>
@endsection