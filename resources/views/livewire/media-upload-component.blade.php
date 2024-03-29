<div>
    <!-- END NAV -->
    <div class="container">
        <div class="columns">
            <div class="column is-3 ">
                <aside class="menu is-hidden-mobile">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a class="is-active">Dashboard</a></li>
                        <li><a href="{{ route('customers') }}">Customers</a></li>
                        <li><a href="{{route('video.manager')}}">Video Manager</a></li>
                        <li><a>Other</a></li>
                    </ul>
                    <p class="menu-label">
                        Administration
                    </p>
                    <ul class="menu-list">
                        <li><a>Team Settings</a></li>
                        <li>
                            <a>Manage Your Team</a>
                            <ul>
                                <li><a>Members</a></li>
                                <li><a>Plugins</a></li>
                                <li><a>Add a member</a></li>
                                <li><a>Remove a member</a></li>
                            </ul>
                        </li>
                        <li><a wire:click.defer="toggleModal">Upload Media</a></li>
                        <li><a>Cloud Storage Environment Settings</a></li>
                        <li><a>Authentication</a></li>
                        <li><a>Payments</a></li>
                    </ul>
                    <p class="menu-label">
                        Transactions
                    </p>
                    <ul class="menu-list">
                        <li><a>Payments</a></li>
                        <li><a>Transfers</a></li>
                        <li><a>Balance</a></li>
                        <li><a>Reports</a></li>
                    </ul>
                </aside>
            </div>
            <div class="column is-fullwidth">
                <nav class="breadcrumb" aria-label="breadcrumbs">
                    <ul>
                        <li><a href="../">Bulma</a></li>
                        <li><a href="../">Templates</a></li>
                        <li><a href="../">Examples</a></li>
                        <li class="is-active"><a href="#" aria-current="page">Admin</a></li>
                    </ul>
                </nav>

                <!-- <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                Hello, Admin.
                            </h1>
                            <h2 class="subtitle">
                                I hope you are having a great day!
                            </h2>
                        </div>
                    </div>
                </section> -->

                <section class="info-tiles">
                    <div class="tile is-ancestor has-text-centered">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{App\Models\User::count()}}</p>
                                <p class="subtitle">Users</p>
                                <small>{{$data->count()}} hits</small>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{App\Models\Multimedia::count()}}</p>
                                <p class="subtitle">Movies</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">0</p>
                                <p class="subtitle">TV Series</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">19</p>
                                <p class="subtitle">Downloads</p>
                            </article>
                        </div>
                    </div>
                </section>


                <div class="">
                    <div class="is-fullwidth">
                        <div class="">
                            <header class="card-header">
                                <p class="card-header-title">
                                    Events
                                </p>
                                <a href="#" class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                                </a>
                            </header>
                            <div class="card-table col-lg-12">
                                <div class="content">
                                    <table class="table is-fullwidth is-striped">
                                        
                                        <tbody>
                                            @forelse($data as $hit)
                                            <tr>
                                                <td width="5%">{{$hit->user_id}}</i></td>
                                                <td>{{ $hit->ip_address}}</td>
                                                <td>{{ $hit->user_agent}}</td>
                                                <td>{{ $hit->last_activity}}</td>
                                                <td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <!-- <td width="5%"><i class="fa fa-bell-o"></i></td> -->
                                                <td>No User Hits</td>
                                                <!-- <td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td> -->
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <a href="#" class="card-footer-item">View All</a>
                            </footer>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @include('widgets.Back.media-uploader')
</div>
