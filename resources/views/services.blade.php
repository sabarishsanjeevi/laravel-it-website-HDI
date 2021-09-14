@include('include.preloader')
@include('include.menu')
@extends('include.header')

@section('header')
Services
@endsection

<section class="page-header bg_img" data-background="./assets/images/page-header.png">
    <div class="bottom-shape d-none d-md-block">
        <img src="./assets/css/img/page-header.png" alt="css">
    </div>
    <div class="container">
        <div class="page-header-content cl-white">
            <h2 class="title">Features</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#0">Pages</a>
                </li>
                <li>
                    Features
                </li>
            </ul>
        </div>
    </div>
</section>
<!--============= Header Section Ends Here =============-->



<!--============= Feature Section Starts Here =============-->
<section class="feature-section padding-top padding-bottom oh">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="section-header mw-100">
                    <h5 class="cate">An Exhaustive list of Amazing Features</h5>
                    <h2 class="title">The only application you’ll need to power your life.</h2>
                    <p class="mw-500">Numerous features make it possible to customize the system
                        in accordance with all your needs.</p>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs feature-tab-menu">
            <li>
                <a  data-toggle="tab" href="#collaboration" class="active">Collaboration</a>
            </li>
            <li>
                <a  data-toggle="tab" href="#productivity">Productivity</a>
            </li>
            <li>
                <a  data-toggle="tab" href="#integrations">Integrations</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="collaboration">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="feature-tab-header">
                            <h3 class="title">Collaboration</h3>
                            <p>Bring your team together. Discuss projects, share ideas, and get work done in real time.</p>
                        </div>
                    </div>
                </div>
                <div class="cola-area">
                    <div class="cola-item">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="cola-content">
                                <div class="thumb">
                                    <img src="./assets/images/feature/colaboration.png" alt="feature">
                                </div>
                                <span class="cate">Collaboration</span>
                                <h5 class="title">Share all types of files and find them easily</h5>
                                <ul>
                                    <li>Drag and Drop files</li>
                                    <li>Shared files</li>
                                    <li>Share multiple file </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="cola-thumb">
                                <img src="./assets/images/feature/feat1.png" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="cola-item">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="cola-content">
                                <div class="thumb">
                                    <img src="./assets/images/feature/colaboration.png" alt="feature">
                                </div>
                                <span class="cate">Collaboration</span>
                                <h5 class="title">Jump onto video calls with just a click</h5>
                                <ul>
                                    <li>Video Conferencing</li>
                                    <li>Connect with remote teams</li>
                                    <li>Share your screen</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="cola-thumb">
                                <img src="./assets/images/feature/feat2.png" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="cola-item">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="cola-content">
                                <div class="thumb">
                                    <img src="./assets/images/feature/colaboration.png" alt="feature">
                                </div>
                                <span class="cate">Collaboration</span>
                                <h5 class="title">Share all types of files and find them easily</h5>
                                <ul>
                                    <li>Drag and Drop files</li>
                                    <li>Shared files</li>
                                    <li>Share multiple file </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="cola-thumb">
                                <img src="./assets/images/feature/feat3.png" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="cola-item">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="cola-content">
                                <div class="thumb">
                                    <img src="./assets/images/feature/colaboration.png" alt="feature">
                                </div>
                                <span class="cate">Collaboration</span>
                                <h5 class="title">Find whatever you're looking for</h5>
                                <ul>
                                    <li>fast and easy Search</li>
                                    <li>Search files and links</li>
                                    <li>Advanced search</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="cola-thumb">
                                <img src="./assets/images/feature/feat4.png" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="cola-item">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="cola-content">
                                <div class="thumb">
                                    <img src="./assets/images/feature/colaboration.png" alt="feature">
                                </div>
                                <span class="cate">Collaboration</span>
                                <h5 class="title">Share important news and updates with the entire team</h5>
                                <ul>
                                    <li>Announcement channels</li>
                                    <li>Broadcast information</li>
                                    <li>Sending email updates </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="cola-thumb">
                                <img src="./assets/images/feature/feat5.png" alt="feature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="productivity">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="feature-tab-header">
                            <h3 class="title">productivity</h3>
                            <p>Boost your team's productivity and efficiency with our inbuilt
                                tools. Collaborate with team members, share opinions,
                                and manage your tasks more efficiently.</p>
                        </div>
                    </div>
                </div>
                <div class="cola-area">
                    <div class="cola-item">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="cola-content">
                                <div class="thumb">
                                    <img src="./assets/images/feature/productivity.png" alt="feature">
                                </div>
                                <span class="cate">productivity</span>
                                <h5 class="title">Convert discussions to tasks
                                    instantly</h5>
                                <ul>
                                    <li>creating to-dos</li>
                                    <li>Increase the conversion efficiency</li>
                                    <li>Make checklists</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="cola-thumb">
                                <img src="./assets/images/feature/feat6.png" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="cola-item">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="cola-content">
                                <div class="thumb">
                                    <img src="./assets/images/feature/productivity.png" alt="feature">
                                </div>
                                <span class="cate">productivity</span>
                                <h5 class="title">Create notes and collaborate
                                    with your team on the go</h5>
                                <ul>
                                    <li>Notes feature</li>
                                    <li>Share ideas quickly</li>
                                    <li>Enhance team collaboration</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="cola-thumb">
                                <img src="./assets/images/feature/feat7.png" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="cola-item">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="cola-content">
                                <div class="thumb">
                                    <img src="./assets/images/feature/productivity.png" alt="feature">
                                </div>
                                <span class="cate">productivity</span>
                                <h5 class="title">Missed a deadline?
                                    Never again</h5>
                                <ul>
                                    <li>Never miss another deadline</li>
                                    <li>Set a reminder</li>
                                    <li>Reminders set for all </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="cola-thumb">
                                <img src="./assets/images/feature/feat8.png" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="cola-item">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="cola-content">
                                <div class="thumb">
                                    <img src="./assets/images/feature/productivity.png" alt="feature">
                                </div>
                                <span class="cate">productivity</span>
                                <h5 class="title">Streamline and automate
                                    your workflows</h5>
                                <ul>
                                    <li>Simplify and automate</li>
                                    <li>Receive real-time updates</li>
                                    <li>Enhance team collaboration</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="cola-thumb">
                                <img src="./assets/images/feature/feat9.png" alt="feature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="integrations">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="feature-tab-header">
                            <h3 class="title">integrations</h3>
                            <p>Integrate your most frequently used third-party apps
                                with Mosto. Choose from over 60+ apps listed
                                on our Appstore or build your own.</p>
                        </div>
                    </div>
                </div>
                <div class="cola-area">
                    <div class="cola-item">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="cola-content">
                                <div class="thumb">
                                    <img src="./assets/images/feature/integrations.png" alt="feature">
                                </div>
                                <span class="cate">Integrations</span>
                                <h5 class="title">Access your entire Google
                                    Drive from within Mosto</h5>
                                <ul>
                                    <li>Collaborate with Google Drive's</li>
                                    <li>Increase the conversion efficiency</li>
                                    <li>Make checklists</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="cola-thumb">
                                <img src="./assets/images/feature/feat10.png" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="cola-item">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="cola-content">
                                <div class="thumb">
                                    <img src="./assets/images/feature/integrations.png" alt="feature">
                                </div>
                                <span class="cate">Integrations</span>
                                <h5 class="title">Reach every meeting on
                                    time with Google Calendar</h5>
                                <ul>
                                    <li>Collaborate with Google Drive's</li>
                                    <li>Increase the conversion efficiency</li>
                                    <li>Make checklists</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="cola-thumb">
                                <img src="./assets/images/feature/feat11.png" alt="feature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Feature Section Ends Here =============-->


<!--============= Comunity Section Starts Here =============-->
<section class="comunity-section padding-top padding-bottom oh pos-rel">
    <div class="comunity-bg bg_img" data-background="./assets/images/client/mosto-client.jpg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-header cl-white">
                    <h5 class="cate">Join to comunity</h5>
                    <h2 class="title">Over 1 000 000 users</h2>
                    <p>Join and share in a community of like-minded members</p>
                </div>
            </div>
        </div>
        <div class="comunity-wrapper">
            <div class="buttons"><a href="#0" class="button-3 active">Join to comunity <i class="flaticon-right"></i></a></div>
            <div class="comunity-area">
                <div class="comunity-item"><img src="./assets/images/comunity/1.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/2.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/3.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/4.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/5.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/6.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/7.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/8.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/9.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/10.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/11.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/12.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/13.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/14.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/15.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/16.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/17.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/18.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/19.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/22.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/20.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/21.png" alt="comunity"></div>
            </div>
            <div class="comunity-area two">
                <div class="comunity-item"><img src="./assets/images/comunity/1.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/2.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/3.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/4.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/5.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/6.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/7.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/8.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/9.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/10.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/11.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/12.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/13.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/14.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/15.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/16.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/17.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/18.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/19.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/22.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/20.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/21.png" alt="comunity"></div>
            </div>
            <div class="comunity-area three">
                <div class="comunity-item"><img src="./assets/images/comunity/1.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/2.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/3.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/4.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/5.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/6.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/7.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/8.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/9.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/10.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/11.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/12.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/13.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/14.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/15.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/16.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/17.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/18.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/19.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/22.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/20.png" alt="comunity"></div>
                <div class="comunity-item"><img src="./assets/images/comunity/21.png" alt="comunity"></div>
            </div>
        </div>
    </div>
</section>
<!--============= Comunity Section Ends Here =============-->

<!--============= Sponsor Section Section Here =============-->
<section class="sponsor-section padding-bottom">
    <div class="container">
        <div class="section-header mw-100">
            <h5 class="cate">Used by over 1,000,000 people worldwide</h5>
            <h2 class="title">Companies that trust us</h2>
        </div>
        <div class="sponsor-slider-4 owl-theme owl-carousel">
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor1.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor2.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor3.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor4.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor5.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor6.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor7.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor1.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor2.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor3.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor4.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor5.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor6.png" alt="sponsor">
            </div>
            <div class="sponsor-thumb">
                <img src="./assets/images/sponsor/sponsor7.png" alt="sponsor">
            </div>
        </div>
    </div>
</section>

@include('include.js')
