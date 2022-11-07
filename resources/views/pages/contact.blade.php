@extends('layouts.page')

@section('content')
<div class="page-container page-height">

            <h1 class="h1-title">Have a question?</h1>

            <p class="intro">
                Tell us everything and we ll do our best to help you as quickly as possible.
            </p>

            <form action="#">
                
                <div class="form-row">

                    <div class="form-line">
                        <label>First Name <span class="mandatory">*</span></label>
                        <input type="text" required="required" id="firstname" placeholder="Your first name" />
                    </div>

                    <div class="form-line">
                        <label>Last Name <span class="mandatory">*</span></label>
                        <input type="text" required="required" id="lastname" placeholder="Your last name" />
                    </div>

                </div>

                <div class="form-line">
                    <label>Email Address <span class="mandatory">*</span></label>
                    <input type="text" required="required" id="email" placeholder="Your email address" />
                </div>

                <div class="form-line">
                    <label>Phone Number</label>
                    <input type="text" id="phone" placeholder="Your phone number" />
                </div>

                <div class="form-line">
                    <label>Questions or Comments<span class="mandatory">*</span></label>
                    <textarea id="message" required="required" placeholder="Type your message here..."></textarea>
                </div>

                <button class="btn btn-orange send" type="submit">Submit</button>

                <!-- <div class="form-return form-success">Success lorem ipsum...</div> -->
                <!-- <div class="form-return form-error">Error lorem ipsum...</div> -->

            </form>

        </div>
@stop
