@extends('frontend.layouts.main')

@section('content')

    <!-- Best Bidding Products Section Start -->
    <div class="pages-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="pages-content contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-headings text-center">
                        <h2 class="h2-responsive">
                            <span>Say</span>
                            <span>Hi</span>
                            <span><i class="fa fa-circle"></i></span>
                        </h2>
                        <p>Drop me a line, We'll get back to you!</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="contact_form-wrapper mb-5">
                        <form action="#" class="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form__group form-group">
                                        <input type="text" class="form__input form-control" placeholder="Name" name="name" id="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form__group form-group">
                                        <input type="email" class="form__input form-control" placeholder="Email" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group form-group">
                                        <textarea class="form__input-textarea form-control" name="contactMessage" id="contactMessage" cols="30" rows="3" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group">
                                        <button class="btn-submit">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Bidding Products Section End -->

@endsection
