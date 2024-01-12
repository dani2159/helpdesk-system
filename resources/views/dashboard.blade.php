@extends('layouts.app')

@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="row row-cols-1">
                    <div class="overflow-hidden d-slider1 ">
                        <ul class="p-0 m-0 mb-1 swiper-wrapper list-inline">
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                                <div class="card-body">
                                    <div class="progress-widget">
                                        <div class="bg-info text-white rounded p-4">
                                            <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.8496 4.25024V6.67024" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M13.8496 17.76V19.784" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M13.8496 14.3247V9.50366" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M18.7021 20C20.5242 20 22 18.5426 22 16.7431V14.1506C20.7943 14.1506 19.8233 13.1917 19.8233 12.001C19.8233 10.8104 20.7943 9.85039 22 9.85039L21.999 7.25686C21.999 5.45745 20.5221 4 18.7011 4H5.29892C3.47789 4 2.00104 5.45745 2.00104 7.25686L2 9.93485C3.20567 9.93485 4.17668 10.8104 4.17668 12.001C4.17668 13.1917 3.20567 14.1506 2 14.1506V16.7431C2 18.5426 3.4758 20 5.29787 20H18.7021Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="progress-detail">
                                            <p class="mb-1">TIKET BULAN INI</p>
                                            <h4 class="counter">0</h4>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                                <div class="card-body">
                                    <div class="progress-widget">
                                        <div class="bg-danger text-white rounded p-4">
                                            <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.9852 21.606C11.9852 21.606 19.6572 19.283 19.6572 12.879C19.6572 6.474 19.9352 5.974 19.3192 5.358C18.7042 4.742 12.9912 2.75 11.9852 2.75C10.9792 2.75 5.26616 4.742 4.65016 5.358C4.03516 5.974 4.31316 6.474 4.31316 12.879C4.31316 19.283 11.9852 21.606 11.9852 21.606Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M13.864 13.8249L10.106 10.0669" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M10.106 13.8249L13.864 10.0669" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="progress-detail">
                                            <p class="mb-2">SLA TERLAMPAUI</p>
                                            <h4 class="counter">0</h4>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                <div class="card-body">
                                    <div class="progress-widget">
                                        <div class="bg-warning text-white rounded p-4">
                                            <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.81409 20.4368H19.1971C20.7791 20.4368 21.7721 18.7267 20.9861 17.3527L13.8001 4.78775C13.0091 3.40475 11.0151 3.40375 10.2231 4.78675L3.02509 17.3518C2.23909 18.7258 3.23109 20.4368 4.81409 20.4368Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M12.0024 13.4147V10.3147" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M11.995 16.5H12.005" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="progress-detail">
                                            <p class="mb-2">MENDEKATI SLA</p>
                                            <h4 class="counter">0</h4>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                                <div class="card-body">
                                    <div class="progress-widget">
                                        <div class="bg-success text-white rounded p-4">
                                            <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.857 20.417C19.73 20.417 21.249 18.899 21.25 17.026V17.024V14.324C20.013 14.324 19.011 13.322 19.01 12.085C19.01 10.849 20.012 9.846 21.249 9.846H21.25V7.146C21.252 5.272 19.735 3.752 17.862 3.75H17.856H6.144C4.27 3.75 2.751 5.268 2.75 7.142V7.143V9.933C3.944 9.891 4.945 10.825 4.987 12.019C4.988 12.041 4.989 12.063 4.989 12.085C4.99 13.32 3.991 14.322 2.756 14.324H2.75V17.024C2.749 18.897 4.268 20.417 6.141 20.417H6.142H17.857Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.3711 9.06303L12.9871 10.31C13.0471 10.432 13.1631 10.517 13.2981 10.537L14.6751 10.738C15.0161 10.788 15.1511 11.206 14.9051 11.445L13.9091 12.415C13.8111 12.51 13.7671 12.647 13.7891 12.782L14.0241 14.152C14.0821 14.491 13.7271 14.749 13.4231 14.589L12.1921 13.942C12.0711 13.878 11.9271 13.878 11.8061 13.942L10.5761 14.589C10.2711 14.749 9.91609 14.491 9.97409 14.152L10.2091 12.782C10.2321 12.647 10.1871 12.51 10.0891 12.415L9.09409 11.445C8.84809 11.206 8.98309 10.788 9.32309 10.738L10.7001 10.537C10.8351 10.517 10.9521 10.432 11.0121 10.31L11.6271 9.06303C11.7791 8.75503 12.2191 8.75503 12.3711 9.06303Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="progress-detail">
                                            <p class="mb-2">TIKET SELESAI</p>
                                            <h4 class="counter">0</h4>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="swiper-button swiper-button-next"></div>
                        <div class="swiper-button swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row">

                    <div class="col-md-12 col-lg-12">
                        <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                            <div class="flex-wrap card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="mb-2 card-title">Enterprise Clients</h4>
                                    <p class="mb-0">
                                        <svg class ="me-2 text-primary icon-24" width="24" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                                        </svg>
                                        15 new acquired this month
                                    </p>
                                </div>
                            </div>
                            <div class="p-0 card-body">
                                <div class="mt-4 table-responsive">
                                    <table id="basic-table" class="table mb-0 table-striped" role="grid">
                                        <thead>
                                            <tr>
                                                <th>COMPANIES</th>
                                                <th>CONTACTS</th>
                                                <th>ORDER</th>
                                                <th>COMPLETION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                            src="../assets/images/shapes/01.png" alt="profile">
                                                        <h6>Addidis Sportwear</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="iq-media-group iq-media-group-1">
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                        </a>
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                        </a>
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>$14,000</td>
                                                <td>
                                                    <div class="mb-2 d-flex align-items-center">
                                                        <h6>60%</h6>
                                                    </div>
                                                    <div class="shadow-none progress bg-soft-primary w-100"
                                                        style="height: 4px">
                                                        <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                            role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                            src="../assets/images/shapes/05.png" alt="profile">
                                                        <h6>Netflixer Platforms</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="iq-media-group iq-media-group-1">
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                        </a>
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>$30,000</td>
                                                <td>
                                                    <div class="mb-2 d-flex align-items-center">
                                                        <h6>25%</h6>
                                                    </div>
                                                    <div class="shadow-none progress bg-soft-primary w-100"
                                                        style="height: 4px">
                                                        <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                            role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                            src="../assets/images/shapes/02.png" alt="profile">
                                                        <h6>Shopifi Stores</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="iq-media-group iq-media-group-1">
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                        </a>
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>$8,500</td>
                                                <td>
                                                    <div class="mb-2 d-flex align-items-center">
                                                        <h6>100%</h6>
                                                    </div>
                                                    <div class="shadow-none progress bg-soft-success w-100"
                                                        style="height: 4px">
                                                        <div class="progress-bar bg-success" data-toggle="progress-bar"
                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                            src="../assets/images/shapes/03.png" alt="profile">
                                                        <h6>Bootstrap Technologies</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="iq-media-group iq-media-group-1">
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                        </a>
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                        </a>
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                        </a>
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>$20,500</td>
                                                <td>
                                                    <div class="mb-2 d-flex align-items-center">
                                                        <h6>100%</h6>
                                                    </div>
                                                    <div class="shadow-none progress bg-soft-success w-100"
                                                        style="height: 4px">
                                                        <div class="progress-bar bg-success" data-toggle="progress-bar"
                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                                                            src="../assets/images/shapes/04.png" alt="profile">
                                                        <h6>Community First</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="iq-media-group iq-media-group-1">
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>$9,800</td>
                                                <td>
                                                    <div class="mb-2 d-flex align-items-center">
                                                        <h6>75%</h6>
                                                    </div>
                                                    <div class="shadow-none progress bg-soft-primary w-100"
                                                        style="height: 4px">
                                                        <div class="progress-bar bg-primary" data-toggle="progress-bar"
                                                            role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="row">

                    <div class="col-md-12 col-lg-12">
                        <div class="card" data-aos="fade-up" data-aos-delay="600">
                            <div class="flex-wrap card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="mb-2 card-title">Pengumuman</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="bd-example">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Maintenance Jaringan</h5>
                                                <small class="text-muted">07 Jan 2023</small>
                                            </div>
                                            <small class="text-muted">Mohon maaf akan ada pemeliharaan jaringan
                                                pada hari
                                                minggu</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Migrati Database</h5>
                                                <small class="text-muted">04 Jan 2023</small>
                                            </div>
                                            <small class="text-muted">Akan adanya perpindahan database ke server
                                                baru, khanza akan mengalami error beberapa waktu</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">List group item heading</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                                            <small class="text-muted">And some muted small print.</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">List group item heading</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                                            <small class="text-muted">And some muted small print.</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
