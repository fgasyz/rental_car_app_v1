<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            @include('components.navbar-logo')
            <a class="navbar-brand hidden" href="./"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/dashboard"> <i class="menu-icon fa fa-dashboard"></i>dashboard </a>
                </li>

                <h3 class="menu-title">Fitur Utama</h3><!-- /.menu-title -->



                @include('layouts.dashboard.navigation')

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
