@extends('layout.adminmain')
@include('inc.doctorPanel.navSide')
@section('doctorViewPatientFollowList')


    <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-8">
                    <div class="ibox">
                        <div class="ibox-content">
                            <span class="text-muted small pull-right">Last modification: <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2014</span>
                            <h2>Patients</h2>
                            

                            <div class="input-group">
                                <input type="text" placeholder="Search patient " class="input form-control">
                                <span class="input-group-btn">
                                        <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                                </span>
                            </div>
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <span class="pull-right small text-muted">1406 Elements</span>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Contacts</a></li>
                                 <li class="inactive"><a data-toggle="tab" href="#tab-3"><i class="fa fa-user"></i> Followup Date</a></li>
                                
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                <tr>
                                                    <td class="client-avatar"><img alt="image" src="{{asset('back/img/a2.jpg')}}"> </td>
                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link">Anthony Jackson</a></td>
                                                    <td> Tellus Institute</td>
                                                    <td class="contact-type"></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><img alt="image" src="{{asset('back/img/a3.jpg')}}"> </td>
                                                    <td><a data-toggle="tab" href="#contact-2" class="client-link">Rooney Lindsay</a></td>
                                                    <td>Proin Limited</td>
                                                    <td class="contact-type"></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><img alt="image" src="{{asset('back/img/a4.jpg')}}"> </td>
                                                    <td><a data-toggle="tab" href="#contact-3" class="client-link">Lionel Mcmillan</a></td>
                                                    <td>Et Industries</td>
                                                    <td class="contact-type"></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a5.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-4" class="client-link">Edan Randall</a></td>
                                                    <td>Integer Sem Corp.</td>
                                                    <td class="contact-type"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a6.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-2" class="client-link">Jasper Carson</a></td>
                                                    <td>Magna Associates</td>
                                                    <td class="contact-type"></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a7.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-3" class="client-link">Reuben Pacheco</a></td>
                                                    <td>Magna Associates</td>
                                                    <td class="contact-type"></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a1.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link">Simon Carson</a></td>
                                                    <td>Erat Corp.</td>
                                                    <td class="contact-type"></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a3.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-2" class="client-link">Rooney Lindsay</a></td>
                                                    <td>Proin Limited</td>
                                                    <td class="contact-type"></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-3" class="client-link">Lionel Mcmillan</a></td>
                                                    <td>Et Industries</td>
                                                    <td class="contact-type"></td>
                                                   </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a5.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-4" class="client-link">Edan Randall</a></td>
                                                    <td>Integer Sem Corp.</td>
                                                    <td class="contact-type"></i></td>
                                                   </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a2.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link">Anthony Jackson</a></td>
                                                    <td> Tellus Institute</td>
                                                    <td class="contact-type"></td>
                                                   </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a7.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-2" class="client-link">Reuben Pacheco</a></td>
                                                    <td>Magna Associates</td>
                                                    <td class="contact-type"></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-3"class="client-link">Edan Randall</a></td>
                                                    <td>Integer Sem Corp.</td>
                                                    <td class="contact-type"></i></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-4" class="client-link">Jasper Carson</a></td>
                                                    <td>Mone Industries</td>
                                                    <td class="contact-type"></i></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-2" class="client-link">Reuben Pacheco</a></td>
                                                    <td>Magna Associates</td>
                                                    <td class="contact-type"></td>
                                                   </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link">Simon Carson</a></td>
                                                    <td>Erat Corp.</td>
                                                    <td class="contact-type"></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-3" class="client-link">Rooney Lindsay</a></td>
                                                    <td>Proin Limited</td>
                                                    <td class="contact-type"></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-4" class="client-link">Lionel Mcmillan</a></td>
                                                    <td>Et Industries</td>
                                                    <td class="contact-type"></i></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link">Edan Randall</a></td>
                                                    <td>Integer Sem Corp.</td>
                                                    <td class="contact-type"></i></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-2" class="client-link">Anthony Jackson</a></td>
                                                    <td> Tellus Institute</td>
                                                    <td class="contact-type"></td>
                                                   </td>
                                                </tr>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-4" class="client-link">Reuben Pacheco</a></td>
                                                    <td>Magna Associates</td>
                                                    <td class="contact-type"></td>
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
                    </div>
                </div>
                
            </div>
        </div>
        <div class="footer">
            
            <div>
                <strong>Copyright</strong> Soodep &copy; 2014-2015
            </div>
        </div>





@endsection
