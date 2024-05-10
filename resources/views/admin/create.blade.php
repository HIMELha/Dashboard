@extends('admin.layout.app')

@section('header')
@endsection

@section('contents')
    <div class="pagetitle">
        <h1>Home / Users / Create</h1>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Create something</h5>

                            <a href="" class="btn btn-info text-white">Back</a>
                        </div>

                        <!-- General Form Elements -->
                        <form id="userForm">
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputText">Your name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputText">Your name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputText">Your name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputText">Your name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>

                            </div>


                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputText">Your name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputText">Your name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>

                            </div>


                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputText">Your name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputText">Your name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>

                            </div>

                            <div class="form-group col-md-6">
                                <button class="btn btn-success my-2">Submit</button>
                            </div>
                        </form>
                        <!-- End General Form Elements -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
@endsection
