@extends('welcome')
@section('content')
    <style>
        .slide-inner.bg-height {
            display: none;}
    </style>


    <div class="contact-with-map" style="margin-top: 50px">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d958.5701228058755!2d108.18045282918847!3d16.050927999305763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdb404c09c51cf9a0!2zMTbCsDAzJzAzLjMiTiAxMDjCsDEwJzUxLjYiRQ!5e0!3m2!1sen!2s!4v1662982259059!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-form-area section-space-bottom-100">
            <div class="container">
                <div class="contact-form-wrap">
                    <form id="contact-form" method="post" class="contact-form" action="{{URL::to('/save-contact')}}">
                        {{ csrf_field() }}
                        <h4 class="contact-form-title pb-2 mb-7">Gửi cho chúng tôi yêu cầu của bạn</h4>
                        <div class="form-field">
                            <input type="text" name="contact_name" placeholder="Họ Tên*" class="input-field">
                        </div>
                        <div class="form-field mt-6">
                            <input type="text" name="contact_email" placeholder="Email*" class="input-field">
                        </div>
                        <div class="form-field mt-6">
                            <textarea name="contact_mess" placeholder="Nội dung" class="textarea-field"></textarea>
                        </div>
                        <div class="button-wrap mt-8">
                            <button type="submit" value="submit" class="btn btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0" name="submit">Gửi</button>
                        </div>
                        <p class="form-messege mt-3 mb-0"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
