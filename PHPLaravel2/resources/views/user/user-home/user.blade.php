@extends('user.user') @section('title', "Chi tiết bảng tin") @section('content-user')
    <section id="about" class="section section-about wow fadeInUp">
        <div class="profile">
            <div class="row">
                <div class="col-sm-4">
                    <div class="photo-profile">
                        <frofilre-show></frofilre-show>
                    </div>
                    <div>
                        <div class="available">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <span class="text-available"> Trung tâm </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="info-profile">
                        <h2><span class="span-hi">Xin chào: {{$Nguoidung->name}}</span> </h2>
                        <h3></h3>
                        <p>.</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="ul-info">
                                    <li class="li-info">
                                        <span class="title-info">Email: </span>
                                        <span class="info">{{$Nguoidung->email}}</span>
                                    </li>
                                    <li class="li-info">
                                        <span class="title-info">Địa chỉ:</span>
                                        <span class="info"></span>
                                    </li>
                                    <li class="li-info">
                                        <span class="title-info">Điện thoại:</span>
                                        <span class="info">{{$Nguoidung->number}}</span>
                                    </li>
                                    <li class="li-info">
                                        <span class="title-info">Tài khoản:</span>
                                        <span class="info"> VNĐ</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="ul-info">
                                    <li class="li-info">
                                        <span class="title-info">Ngày sinh</span>
                                        <span class="info"></span>
                                    </li>
                                    <div >
                                        <li class="li-info">
                                            <span class="title-info">Học trường:</span>
                                            <span class="info"></span>
                                        </li>
                                        <li class="li-info">
                                            <span class="title-info">Ngành:</span>
                                            <span class="info"></span>
                                        </li>
                                        <li class="li-info">
                                            <span class="title-info">Khóa học:</span>
                                            <span class="info"></span>
                                        </li>
                                    </div>
                                    <div >
                                        <li class="li-info">
                                            <span class="title-info">Trung tâm:</span>
                                            <span class="info"></span>
                                        </li>
                                        <li class="li-info">
                                            <span class="title-info">Chuyên:</span>
                                            <span class="info"></span>
                                        </li>
                                        <li class="li-info">
                                            <span class="title-info">Thành lập:</span>
                                            <span class="info"></span>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                            <div class="col-sm-12">
                                <span class="title-links">Social Links</span>
                                <ul class="ul-social-links">
                                    <li class="li-social-links">
                                        <a href="#" data-tootik="Facebook" data-tootik-conf="square">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="li-social-links">
                                        <a href="#" data-tootik="Twitter" data-tootik-conf="square">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="li-social-links">
                                        <a href="#" data-tootik="Google Plus" data-tootik-conf="square">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li class="li-social-links">
                                        <a href="#" data-tootik="Linkedin" data-tootik-conf="square">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="li-social-links">
                                        <a href="#" data-tootik="Dribbble" data-tootik-conf="square">
                                            <i class="fab fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li class="li-social-links">
                                        <a href="#" data-tootik="Pinterest" data-tootik-conf="square">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li class="li-social-links">
                                        <a href="#" data-tootik="Vimeo" data-tootik-conf="square">
                                            <i class="fab fa-vimeo-v"></i>
                                        </a>
                                    </li>
                                    <li class="li-social-links">
                                        <a href="#" data-tootik="Behance" data-tootik-conf="square">
                                            <i class="fab fa-behance"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button href="">
                    Thay đổi mật khẩu
                </button>
                <button href="">
                    Thay đổi thông tin
                </button>
            </div>
        </div>
    </section>
@endsection
