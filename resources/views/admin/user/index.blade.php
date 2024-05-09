@extends('admin.layout.app')

@section('header')

@endsection

@section('contents')
    <div class="pagetitle">
        <h1>Home / Users</h1>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Users lists</h5>
                                <div class="search-bar ">
                                    <form class="search-form d-flex align-items-center" method="POST" action="#">
                                        <input type="text" class="searchbar" name="query" placeholder="Search"
                                            title="Enter search keyword">
                                        <button type="submit" class="btn btn-light" style="border: 1px solid rgb(214, 214, 214)" title="Search"><i class="bi bi-search"></i></button>
                                    </form>
                                </div>
                            
                            <a href="" class="btn btn-info text-white" > <i class="bi bi-plus-circle mr-1"></i> Create</a>
                        </div>

                        <div class="overflow-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Posted Jobs</th>
                                        <th scope="col">Applied Jobs</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Himel Hasan</td>
                                        <td>webhimel032@gmail.com</td>
                                        <td>8</td>
                                        <td>0</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success">View profile</a>
                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Nasa Dev</td>
                                        <td>Ahmmed@mail.com</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <a href="https://techjobsnetwork.webhex.xyz/employer/profile/3"
                                                class="btn btn-sm btn-success">View profile</a>
                                            <a href="https://techjobsnetwork.webhex.xyz/admin/users/3/delete"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Abra Cohen</td>
                                        <td>salyculod@mailinator.com</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <a href="https://techjobsnetwork.webhex.xyz/employer/profile/4"
                                                class="btn btn-sm btn-success">View profile</a>
                                            <a href="https://techjobsnetwork.webhex.xyz/admin/users/4/delete"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Alvin Callahan</td>
                                        <td>volofoxowy@mailinator.com</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <a href="https://techjobsnetwork.webhex.xyz/employer/profile/5"
                                                class="btn btn-sm btn-success">View profile</a>
                                            <a href="https://techjobsnetwork.webhex.xyz/admin/users/5/delete"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Colby Curry</td>
                                        <td>mewabyfija@mailinator.com</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <a href="https://techjobsnetwork.webhex.xyz/employer/profile/6"
                                                class="btn btn-sm btn-success">View profile</a>
                                            <a href="https://techjobsnetwork.webhex.xyz/admin/users/6/delete"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Quon Moody</td>
                                        <td>wazacy@mailinator.com</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <a href="https://techjobsnetwork.webhex.xyz/employer/profile/7"
                                                class="btn btn-sm btn-success">View profile</a>
                                            <a href="https://techjobsnetwork.webhex.xyz/admin/users/7/delete"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Kimberley Gibbs</td>
                                        <td>liquz@mailinator.com</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <a href="https://techjobsnetwork.webhex.xyz/employer/profile/8"
                                                class="btn btn-sm btn-success">View profile</a>
                                            <a href="https://techjobsnetwork.webhex.xyz/admin/users/8/delete"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Stacy Reynolds</td>
                                        <td>roby@mailinator.com</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <a href="https://techjobsnetwork.webhex.xyz/employer/profile/9"
                                                class="btn btn-sm btn-success">View profile</a>
                                            <a href="https://techjobsnetwork.webhex.xyz/admin/users/9/delete"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Colby Delgado</td>
                                        <td>quqemy@mailinator.com</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <a href="https://techjobsnetwork.webhex.xyz/employer/profile/10"
                                                class="btn btn-sm btn-success">View profile</a>
                                            <a href="https://techjobsnetwork.webhex.xyz/admin/users/10/delete"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Lucius Harrell</td>
                                        <td>gozizo@mailinator.com</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <a href="https://techjobsnetwork.webhex.xyz/employer/profile/11"
                                                class="btn btn-sm btn-success">View profile</a>
                                            <a href="https://techjobsnetwork.webhex.xyz/admin/users/11/delete"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Walker Stark</td>
                                        <td>licuwyg@mailinator.com</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success">View profile</a>
                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td>Ori Reeves</td>
                                        <td>xazocicu@mailinator.com</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success">View profile</a>
                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <nav class="d-flex justify-items-center justify-content-between">
                                <!-- paginatoion -->
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
@endsection
