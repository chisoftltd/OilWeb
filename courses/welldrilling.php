<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 29/07/2017
 * Time: 15:47
 */

session_start();

// include the database script
include_once '../db/dbconnect.php';

//end any active user session
//unset($_session['user_id']);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>WebOil - Well Drilling Course</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add JavaScript file-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
    <script src="/js/weboil.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/jspdf.min.js"></script>

    <script>

        $(function () {

            var doc = new jsPDF('p', 'pt', 'a4');
            var specialElementHandlers = {};

            $('#cmddrill').click(function () {

                doc.fromHTML($('#drill').get(0), 15, 15, {
                    'width': 250,
                    'margin': 1,
                    'pagesplit': true, //This will work for multiple pages
                    'elementHandlers': specialElementHandlers
                });

                doc.save('Well-Drilling-Objectives.pdf');
            });

        });
    </script>
    <!-- Add css file-->
    <link rel="stylesheet" href="/css/main-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body><!-- Body area start-->
<header>
    <!-- add top navigational bar using bootstrap-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navweboil">
                    <!--<span class="sr-only">Toggle navigation</span>-->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">WebOil | Well Drilling</a>
            </div>
            <div class="collapse navbar-collapse" id="navweboil">
                <ul class="nav navbar-nav navbar-right">
                    <!-- check if same user is still same as the active session user and load appropriate menu options -->
                    <?php if (isset($_SESSION['usr_id'])) { ?>
                        <li><a href="signinindex.php">Home</a></>
                        <li><a href="/menu/about.php">About Us</a></li>
                        <li class="active"><a href="/menu/courses.php">Courses</a></li>
                        <li><a href="/menu/assessment.php">Test Yourself</a></li>
                        <li><a href="/menu/submission.php">Submission</a></li>

                        <li><a href="/menu/contact.php">Contact Us</a></li>
                        <li><a href="/menu/help.php">Help</a></li>
                        <li><p class="navbar-text"><span
                                        class="glyphicon glyphicon-user">Signed in as <?php echo $_SESSION['usr_name']; ?>
                            </p></li>
                        <li><a href="/index.php"><span class="glyphicon glyphicon-log-out">Log Out</a></li>
                        <form class="navbar-form navbar-right">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php } else { ?>
                        <li><a href="/index.php">Home</a></>
                        <li><a href="/menu/about.php">About Us</a></li>
                        <li class="active"><a href="/menu/courses.php">Courses</a></li>
                        <li><a href="/menu/assessment.php">Test Yourself</a></li>
                        <li><a href="/menu/submission.php">Submission</a></li>

                        <li><a href="/menu/contact.php">Contact Us</a></li>
                        <li><a href="/menu/help.php">Help</a></li>
                        <li><a href="/menu/login.php"><span class="glyphicon glyphicon-log-in">Login</a></li>
                        <li><a href="/menu/register.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>
                        <form class="navbar-form navbar-right">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

</header>
<hr> <!-- draw a line-->
<section>
    <div class="container" style="background-color: #b0e0e6">
        <ul class="breadcrumb">
            <li><a href="/index.php">Home</a></li>
            <li><a href="/contact.php">Courses</a></li>
            <li class="active">Drilling</li>
        </ul>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group nav" role="tablist">
                        <li class="list-group-item">
                            <a href="#seite1" data-toggle="tab" aria-controls="seite1" role="tab">
                                <h4>Introduction to Well Drilling</h4>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#seite2" data-toggle="tab" aria-controls="seite2" role="tab">
                                <h4>Well Planning Request / Well Objectives</h4>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#seite3" data-toggle="tab" aria-controls="seite3" role="tab">
                                <h4>Drill Environmental consent (DTI)</h4>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#seite4" data-toggle="tab" aria-controls="seite4" role="tab">
                                <h4>Drill Operational Plan</h4>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#seite4" data-toggle="tab" aria-controls="seite5" role="tab">
                                <h4>Rig Organisation</h4>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="seite1">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Well Drilling Course</h1>
                            </header>
                            <div class="panel-body">
                                <figure class="pull-right bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myDrilling1" class="btn btn-lg btn-primary" data-toggle="modal"><span
                                                class="glyphicon glyphicon-play"></span> Launch
                                        Drilling Video</a>
                                    <!-- Modal HTML -->
                                    <div id="myDrilling1" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h3 class="modal-title">Oil and Gas Well Drilling</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="drilling1Video" width="450" height="315"
                                                            src="https://www.youtube.com/embed/SfazJ6P_g7w"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="text-center"><strong>Drilling Video</strong></figcaption>
                                </figure>
                                <div id="drill">
                                    <p> The time required to plan and execute a well construction programme is
                                        dependent on many variables including sub-surface complexity, location and type
                                        of well. For any well, however, there are common activities which must be
                                        addressed to enable comprehensive planning and operational control. For the
                                        purposes of this topic we will assume a single well, drilled from a
                                        semisubmersible
                                        rig. The main activities are:</p>
                                    <ul>
                                        <li>Receipt of well planning request / well objectives;</li>
                                        <li>Allocation of engineering / operational resources;</li>
                                        <li>Review of special considerations (licence requirements, physical
                                            restrictions);
                                        </li>
                                        <li>Well design;</li>
                                        <li>Government/legislative requirements;</li>
                                        <li>Sourcing of materials and services including rig;</li>
                                        <li>Site survey;</li>
                                        <li>Operational plan;</li>
                                        <li>Risk identification and mitigation;</li>
                                        <li>Time /cost generation;</li>
                                        <li>Pre-operational review;</li>
                                        <li>Operational phase;</li>
                                        <li>Post well activities.</li>
                                    </ul>
                                    <hr>
                                    <p>While it would be ideal if the activities shown above could be laid out in an
                                        ordered sequence it is more often the case that many of the activities occur in
                                        parallel. Also it is common for plans to evolve and change as operational
                                        definition is refined. In particular the generation of the time/cost estimate
                                        does
                                        not tend to be a one off event. Invariably costs are required at an early stage
                                        where little detailed planning or review has been performed. Hence accuracy of
                                        the estimate develops throughout the planning phase and different classes of
                                        estimate are often provided dependent on position on the planning/execution
                                        timeline.</p>
                                    <p>
                                        The main activities listed above are discussed in more detail throughout this
                                        module but there follows a summary of the important aspects of each activity
                                        and what deliverables might be expected.
                                    </p>
                                </div>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">&copy; RGU
                                </address>
                                <!--<a href="/files/OilGasDrilling.pdf" download>
                                    Click to download this Course
                                </a>-->
                                <button id="cmddrill">Generate PDF</button>
                            </footer>
                        </article>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="seite2">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Well Planning Request / Well Objectives</h1>
                            </header>
                            <div class="panel-body">
                                <figure class="pull-right bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myDrilling2" class="btn btn-lg btn-primary" data-toggle="modal"><span
                                                class="glyphicon glyphicon-play"></span> Launch
                                        Drilling Video</a>
                                    <!-- Modal HTML -->
                                    <div id="myDrilling2" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h3 class="modal-title">Well Planning Request / Well Objectives</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="drilling2Video" width="450" height="315"
                                                            src="https://www.youtube.com/embed/SfazJ6P_g7w"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="text-center"><strong>Launch Video</strong></figcaption>
                                </figure>
                                <div id="planning">
                                    <h3>Well Planning Request / Well Objectives</h3>
                                    <hr/>
                                    <p>The main purpose of a well planning request is to provide the agreed basis for
                                        design. This document should form the start point for the planning process and
                                        should be referred back to throughout the planning and execution phases to
                                        ensure that all decisions take into account the original basis for the well.</p>
                                    <p>
                                        Ideally the request should be a formal document signed off by the appropriate
                                        levels of authority in both the requesting and executing organisations.
                                    </p>
                                    <p>
                                        Who generates the final, formally agreed request is not necessarily important.
                                        It
                                        may be that the party responsible for well design compiles the request after
                                        discussions with the requestor (or ‘Client’). Perhaps the Client prepares the
                                        document. What is important, however, is that the request is jointly reviewed
                                        and accepted.
                                    </p>
                                    <p>
                                        An integral part of the request document should be a prioritised list of
                                        objectives
                                        for the well. In both the planning and operational phases of a well, decisions
                                        and
                                        compromises may be required and a clear understanding of the priorities of the
                                        well will help to make the appropriate choices. The identification of objectives
                                        also provides the basis for performance evaluation at the completion of the
                                        well.
                                    </p>

                                    <h3>Allocation of Engineering/Operational Resources
                                    </h3>
                                    <hr/>
                                    <p>No well can be planned and drilled without the allocation of the required skills
                                        to
                                        turn a request into reality. Many skills and talents are required but probably
                                        the
                                        most important key to success is to ensure that clear accountability is assigned
                                        for delivery of the well.</p>
                                    <p>
                                        Typically the core resources required to deliver a well would include the
                                        following:
                                    </p>
                                    <ul>
                                        <li>Well Operations Supervision – onshore and offshore;</li>
                                        <li>Well Design Engineering;</li>
                                        <li>Well Operations Engineering;</li>
                                        <li>Welltest/Completions Design Engineering;</li>
                                        <li>Welltest/Completions Operations Engineering.</li>
                                    </ul>

                                    <p>Dependent on scale and maturity of operations the roles can be combined or
                                        indeed may require multiple positions to fulfil the plan. The above roles could
                                        be
                                        considered core within a well construction organisation. There are, however,
                                        many other roles which support delivery of a well:</p>
                                    <ul>
                                        <li>Contracts preparation and negotiation;</li>
                                        <li>Environmental preparation and monitoring;</li>
                                        <li>Audit and quality control of suppliers;</li>
                                        <li>Invoice processing;</li>
                                        <li>Health and safety expertise;
                                        </li>
                                        <li>Cost management;</li>
                                        <li>Marine specialisation;</li>
                                        <li>Administrative and technical support;</li>
                                        <li>Logistics and transport.</li>
                                    </ul>
                                    <p>The requirements for resources vary dependent on the current stage in the
                                        delivery process. It is vital to have a clear plan for timely access to
                                        resources. </p>

                                    <h3>Review of Special Considerations</h3>
                                    <hr>
                                    <p>Once aware of a possible well a review of any special considerations should be
                                        performed. These could include:
                                    </p>
                                    <ul>
                                        <li>more stringent notification requirements;</li>
                                        <li>more stringent environmental requirements (i.e, drilling in an
                                            environmentally sensitive area);
                                        </li>
                                        <li>physical constraints (e.g, pipelines, proximity of other installations)
                                            seasonal access restrictions;
                                        </li>
                                        <li>severe environment (High Pressure High temperature (HPHT), deepwater,
                                            high hydrogen Sulphide (H2S – ‘sour’).
                                        </li>
                                    </ul>
                                    <p>This initial review allows a quick response if the nature of the well requires
                                        greater planning time or resources (or both).</p>

                                    <h3>Government/Legislative Requirements</h3>
                                    <hr>
                                    <p>All wells are subject to government approvals in various guises. For the purpose
                                        of this module the requirements for the United Kingdom Continental Shelf
                                        (UKCS) will be considered. Different countries will have their own
                                        requirements.</p>
                                    <p>In general the planning requirements for the UKCS fall into the following
                                        categories:
                                    </p>
                                    <ul>
                                        <li>Consent to drill wells (Department of Trade and Industry);
                                        </li>
                                        <li>Consent to site mobile installations (Department of Transport, Local
                                            government and the Regions);
                                        </li>
                                        <li>Well Notification (Health and Safety Executive);
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right"> &copy; RGU
                                </address>
                                <button id="cmdplanning">Generate PDF</button>
                            </footer>
                        </article>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="seite3">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Environmental consent (DTI)</h1>
                            </header>
                            <div class="panel-body">
                                <figure class="pull-right bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myDrilling3" class="btn btn-lg btn-primary" data-toggle="modal"><span
                                                class="glyphicon glyphicon-play"></span> Launch
                                        Drilling Video</a>
                                    <!-- Modal HTML -->
                                    <div id="myDrilling3" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h3 class="modal-title">Environmental consent (DTI)</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="drilling3Video" width="450" height="315"
                                                            src="https://www.youtube.com/embed/SfazJ6P_g7w"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="text-center"><strong>Launch Video</strong></figcaption>
                                </figure>
                                <div id="env">
                                    <h3>Environmental consent (DTI)</h3>
                                    <hr>
                                    <p>It is illegal to commence operations without the relevant approvals or
                                        notifications in place.
                                    </p>
                                    <p>Further requirements exist during the operational phase:
                                    </p>
                                    <ul>
                                        <li>Rig move notification (various);
                                        </li>
                                        <li>Well commencement notification (DTI);
                                        </li>
                                        <li>Weekly Activity Report (HSE);
                                        </li>
                                        <li>Incident reporting (DTI/HSE);
                                        </li>
                                    </ul>
                                    <p>Any material change to design or chemical usage (HSE/DTI).
                                    </p>

                                    <h3>Plan for Decommission</h3>
                                    <hr>
                                    <p>Even before drilling commence, decommissioning of the well is also planned. After
                                        the end
                                        of operations communications to close out a specific well include:</p>
                                    <ul>
                                        <li>
                                            Chemical Discharge Records (DTI or agent);
                                        </li>
                                        <li>Rig Emissions Data (DTI or agent);
                                        </li>
                                        <li>Conclusion of work (HSE).</li>
                                    </ul>
                                    <p>It is also important to be aware of the life cycle approach to well integrity
                                        adopted in the UKCS which means that even after a well has been finished a
                                        responsibility remains to ensure that the well is fit for its intended purpose
                                        until
                                        it is finally abandoned. </p>

                                    <h3>Well Design
                                    </h3>
                                    <hr>
                                    <p>The following questions have to be adequately addressed before a design can be
                                        considered to be acceptable:
                                    </p>

                                    <ul>
                                        <li>Does the design allow for the expected life of the well?
                                        </li>
                                        <li>Are the materials used to construct the well suitable for the fluids and
                                            conditions expected throughout the well’s life?
                                        </li>
                                        <li>Do any unusual risks to people, plant or the environment result due to the
                                            chosen design? If so have alternatives been considered? Has risk been
                                            mitigated?
                                        </li>
                                        <li>Has the operability of the design been considered in terms of operational
                                            risk or cost? Is the risked cost acceptable? Have both the construction and
                                            post completion phases been considered?
                                        </li>
                                        <li>Will the client objectives be met by the design?</li>
                                    </ul>
                                    <p>The basic requirement for any well design is to meet the client’s requirements at
                                        an economic cost while maintaining the risk to peoples’ health and the
                                        environment below acceptable limits.</p>

                                    <h3>Sourcing of Materials and Services
                                    </h3>
                                    <hr>
                                    <p>The execution of a well programme requires a complex interaction of suppliers,
                                        materials and equipment. It may be that all supplies and services have been
                                        prearranged
                                        or that no purchase or supply agreements are in place at all. In any
                                        event arrangements must be made to ensure that the required products and
                                        services are available. These could include:</p>
                                    <ul>
                                        <li>Rig and crew hire including catering;
                                        </li>
                                        <li>Marine transport;
                                        </li>
                                        <li>Anchor Handling Vessels (AHVs);
                                        </li>
                                        <li>Rig move planning, navigation and anchoring equipment;
                                        </li>
                                        <li>All casing and tubulars;
                                        </li>
                                        <li>Wellheads and associated rental equipment;</li>
                                        <li>Xmas trees;
                                        </li>
                                        <li>Completion components;
                                        </li>
                                        <li>Mud materials and engineering;
                                        </li>
                                        <li>Cement materials and engineering;
                                        </li>
                                        <li>Directional drilling equipment and personnel;
                                        </li>
                                        <li>Measurement While Drilling (MWD) and Logging While Drilling (LWD)
                                            equipment and personnel;
                                        </li>
                                        <li>Directional Surveying equipment and personnel;
                                        </li>
                                        <li>Electric line logging equipment and personnel;
                                        </li>
                                        <li>Mud Logging equipment and personnel;
                                        </li>
                                        <li>Solids control equipment and personnel;
                                        </li>
                                        <li>Drill bits;
                                        </li>
                                        <li> Drill string rentals;
                                        </li>
                                        <li> Fishing / abandonment equipment and personnel;
                                        </li>
                                        <li> Casing and tubing handling equipment and personnel;
                                        </li>
                                        <li> Coring equipment and personnel;
                                        </li>
                                        <li> Perforating equipment and personnel;
                                        </li>
                                        <li> Weather forecasting;
                                        </li>
                                        <li> Communications service and equipment;
                                        </li>
                                        <li> Site survey vessel, equipment and personnel.
                                        </li>
                                    </ul>
                                    <p>Prior to commencement of operations a detailed load-out list should be prepared
                                        which lists all equipment required for the well. This assists in the callout of
                                        the
                                        required equipment at the appropriate time during the well and also serves as a
                                        check that nothing has been forgotten.</p>

                                    <h3>Site Survey</h3>
                                    <hr>
                                    <p>The requirement for a site survey prior to moving a rig onto a location must be
                                        determined. If a survey is required then it must be organised and performed in
                                        time to allow delivery of, and reaction to, the results.
                                    </p>
                                    <p>A site survey is normally performed to acquire data for the following
                                        reasons:</p>
                                    <ul>
                                        <li>To identify significant debris on the seabed at the intended location;
                                        </li>
                                        <li> To assess the seabed anchor holding characteristics;
                                        </li>
                                        <li> To assess the potential for shallow gas in surface hole.</li>
                                    </ul>
                                    <p>For the UKCS it is a requirement to notify the DTI at least 28 days prior to the
                                        work. For certain areas there may be a seasonal limitation on the shooting of
                                        site
                                        survey seismic.</p>
                                    <p>The survey itself is carried out from a specialised vessel. Typically the work
                                        involves shooting seismic of varying definition over a pre-planned grid which
                                        will
                                        cover the anchor pattern area and include a more concentrated grid around the
                                        proposed location for shallow gas definition. It is common for a consultant to
                                        be
                                        hired to provide third party quality assurance during site survey work.
                                    </p>
                                    <p>Outcomes from a site survey could include:
                                    </p>
                                    <ul>
                                        <li>Everything looks fine to anchor up and drill at the location;
                                        </li>
                                        <li>There are indications of shallow gas which may justify moving surface
                                            location or adopting special shallow gas procedures;
                                        </li>
                                        <li>Re-selection of anchor type, fluke angle or requirement to reinforce certain
                                            anchors with ‘piggy backs’ (additional anchor run of the main anchor to
                                            provide additional hold).
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">&copy; RGU
                                </address>
                                <button id="cmdenv">Generate PDF</button>
                            </footer>
                        </article>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="seite4">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Well Operational Plan</h1>
                            </header>
                            <div class="panel-body">
                                <figure class="pull-right bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myDrilling4" class="btn btn-lg btn-primary" data-toggle="modal"><span
                                                class="glyphicon glyphicon-play"></span> Launch
                                        Drilling Video</a>
                                    <!-- Modal HTML -->
                                    <div id="myDrilling4" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h4 class="modal-title">Well Operational Plan</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="drilling4Video" width="450" height="315"
                                                            src="https://www.youtube.com/embed/SfazJ6P_g7w"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="text-center"><strong>Launch Video</strong></figcaption>
                                </figure>
                                <div id="op">
                                    <h3>Operational Plan</h3>
                                    <hr>
                                    <p>Ultimately the well design has to be translated into an operational plan, or
                                        programme. This provides the approved reference for those charged with
                                        constructing the well. Programmes come in many different styles and formats
                                        but, typically, should include the following:
                                    </p>
                                    <ul>
                                        <li>Appropriate approvals and distribution;
                                        </li>
                                        <li>Purpose of well;
                                        </li>
                                        <li>Prioritised objectives for the well;
                                        </li>
                                        <li>Budget data (time and cost);
                                        </li>
                                        <li>Description of the well design (e.g, casing specification and setting
                                            depths,
                                            directional profile, intended cement coverage)
                                        </li>
                                        <li>Details of expected geology;
                                        </li>
                                        <li>Operational procedure;
                                        </li>
                                        <li> Anticipated hazards, risks, mitigation and contingencies;
                                        </li>
                                        <li>Data acquisition requirements (e.g, logging, sampling);
                                        </li>
                                        <li>Summary of third party programmes such as cementing, drilling fluids and
                                            directional plan;
                                        </li>
                                        <li>Contact details.
                                        </li>
                                    </ul>
                                    <p>The format and detail for a programme will also depend on the type of well to be
                                        drilled. For example the fortieth well on a development programme may require
                                        little more than a one page summary sheet whereas the first High Pressure High
                                        Temperature (HPHT) well in a virgin area could warrant the well construction
                                        equivalent of War and Peace. In consideration of the detail required it is
                                        useful to
                                        put yourself in the place of the well-site supervisor charged with delivering
                                        the
                                        well objectives</p>

                                    <h3>Risk Identification and Mitigation
                                    </h3>
                                    <hr>
                                    <p>The management of risk for a well construction process covers Health, Safety
                                        and Environment (HS&E) risk and operational risk. The former is concerned with
                                        protection of people and the environment the latter with protection of the
                                        business plan which incorporates promises for budget and schedule. As HS&E
                                        and business cultures have developed there has been a tendency to separate
                                        these features in terms of how they are dealt with in the planning process.
                                        Ultimately, however, there appears to be growing consensus that good HSE
                                        management means good operational management and vice versa. Therefore,
                                        instead of having separate processes to consider HS&E and operational risk, all
                                        forms of risk are considered in the one risk management process.</p>
                                    <p>Management of risk is an iterative process. No matter at what stage in the well
                                        construction process identification and understanding of risk should never be
                                        far
                                        from the mind. The processes required involve anything from the awareness of
                                        experienced personnel while compiling plans to full blown hazard operability and
                                        analysis studies involving multi-disciplined teams, formal processes and many
                                        days of scrutiny. The scale, complexity and novelty of the project also should
                                        determine the scale, complexity and novelty of the risk management process.
                                    </p>
                                    <p>In simple terms there are two important times where full accountability of risk
                                        should be formally considered. Firstly at the concept selection phase where the
                                        various options are being reviewed; secondly, once the proposed design and
                                        operational process have been sufficiently defined to allow in depth review.</p>

                                    <h3>Time / Cost Estimate Generation
                                    </h3>
                                    <hr>
                                    <p>The time / cost estimate is the cornerstone of a well construction organisations’
                                        commitment to the business it serves. It is a promise that the objectives will
                                        be
                                        delivered at a given cost. The fundamental issue with time/cost estimation is
                                        that
                                        business plans are often drawn up before the well is sufficiently defined both
                                        in
                                        terms of objectives and design. This is not such a concern if the well in
                                        question
                                        is a repeat of previous types but when dealing with new well types it is
                                        difficult
                                        to
                                        give precise information.
                                    </p>
                                    <p>Estimates are often classified to reflect the level of uncertainty. Examples of
                                        classifications and their likely variance could be:</p>
                                    <ul>
                                        <li>Budgetary: +/- 30%
                                        </li>
                                        <li>Appropriation: +/- 10%
                                        </li>
                                        <li>Pre operational: +/- 5%</li>
                                    </ul>
                                    <p>As with risk management, the estimation process is iterative. The key advice is
                                        to ensure that the client group are kept closely in the loop as estimates evolve
                                        and no room is left for misunderstanding the current cost situation for the
                                        well.</p>
                                    <h3>Pre-operational Review</h3>
                                    <hr>
                                    <p>Prior to commencement of operations it is good practice to review the programme
                                        with those closely involved with its implementation. This is commonly referred
                                        to as a Pre Spud Meeting referring to the common term for commencement of
                                        drilling. The main aims are to ensure that the objectives and performance
                                        measures for the well are understood, the operational plan and operational risks
                                        are communicated and lines of communication are established for the operational
                                        phase. The gathering also serves to help build team rapport which can greatly
                                        enhance the ultimate performance on the well.</p>
                                    <p>The review is also an opportunity to capture any last minute input which could
                                        contribute to improving the plan. Typically meeting attendees would include
                                        those responsible creating the well plan, representatives from the client
                                        group, wellsite supervisors, office and wellsite based service providers
                                        including rig crew and logistics co-ordinators.</p>
                                    <p>A final opportunity for communication prior to commencement of operations is for
                                        the plan to presented to crews at the wellsite either by the well planners or
                                        the wellsite supervisors.</p>
                                    <h3>Operational Phase</h3>
                                    <hr>
                                    <p>The main requirements during the construction phase are:</p>
                                    <ul>
                                        <li>To implement the plan as intended;
                                        </li>
                                        <li>To effectively manage any deviation from the intended plan whatever the
                                            cause (e.g, operational problems, geology not as predicted, change in
                                            objectives);
                                        </li>
                                        <li>To comply with all reporting requirements internal and external to the
                                            organisation;
                                        </li>
                                        <li>To monitor and report current and forecast costs;
                                        </li>
                                        <li>To manage logistics such that all equipment and personnel are available at
                                            wellsite as required.
                                        </li>
                                    </ul>
                                    <h3>Post Well Activities</h3>
                                    <hr>
                                    <p> Once finished the following activities are required to effectively close out the
                                        well construction process:</p>
                                    <ul>
                                        <li>
                                            Receive and review all third party operational reports;
                                        </li>
                                        <li>Hold ‘wash-up’ meeting to discuss results;
                                        </li>
                                        <li>Produce final well cost;
                                        </li>
                                        <li>Obtain Client feedback on performance;
                                        </li>
                                        <li>Prepare well history to include:
                                        </li>
                                        <li>Appropriate approvals and distribution;
                                        </li>
                                        <li>Original purpose of well;
                                        </li>
                                        <li>Measure of attainment of objectives;
                                        </li>
                                        <li>Actual vs. planned time and cost data
                                        </li>
                                        <li>Description of the well as built (e.g, casing specification and setting
                                            depths, directional profile, cement coverage)
                                        </li>
                                        <li>Details of encountered geology;
                                        </li>
                                        <li>Operational review including recommendations for future work;
                                        </li>
                                        <li>Encountered hazards/risks, mitigation and contingencies employed;
                                        </li>
                                        <li>Breakdown of non productive time during well;
                                        </li>
                                        <li>Data acquisition performed (e.g, logging, sampling);
                                        </li>
                                        <li>Summary of third party reports such as cementing, drilling fluids and
                                            directional plan;
                                        </li>
                                        <li>For development wells ensure appropriate handover to production organisation
                                            including basis for design, operational limits and monitoring requirements;
                                        </li>
                                        <li>Finalise any external reporting requirements;
                                        </li>
                                        <li>Distribute reports and archive as required.
                                        </li>
                                    </ul>
                                    <p>Although the major portion of the well construction process is complete by this
                                        stage it should be remembered that a responsibility for the well remains with
                                        the well construction organisation until it is finally abandoned. This should
                                        include ensuring that well conditions are monitored to check the well is being
                                        operated within the original design basis. It may be a requirement to re-enter
                                        the well at some point to repair or change the completion components. There may
                                        also be a future utility to act as a host well for a sidetrack to a new
                                        sub-surface location. Ultimately the well will be abandoned at the end of its
                                        productive life. All of these activities require a similar process to that used
                                        for the original well construction.</p>
                                    <h3>Time Line</h3>
                                    <hr>
                                    <p>Having identified the main activities associated with the well construction
                                        process it would appear straightforward to show a generic timeline incorporating
                                        these activities. Unfortunately the variable nature of wells means that for each
                                        project a different timeline can be drawn up. In fact it is good practice to
                                        draw up a timeline for each well you become involved with to recognise its
                                        uniqueness and highlight the planning issues at an early stage. Some of the main
                                        variables to consider are as follows:</p>
                                    <ul>
                                        <li> Government approval processes, especially environmental, could take times
                                            ranging from 4 weeks up to a year or more dependent on license conditions,
                                            requirement for full blown consultation etc.;
                                        </li>
                                        <li>Dependent on materials required deliveries could range from zero time
                                            because equipment is available in stock to in excess of 12 months;
                                        </li>
                                        <li>Is the well to be drilled in a mature, well serviced location or in a remote
                                            location? The provision of support infrastructure may have to be added into
                                            the equation.
                                        </li>
                                        <li>Complexity of well design has a major bearing. Is the well a follow on from
                                            similar types using the same design or is it brand new, complex and
                                            requiring detailed design work?
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">&copy; RGU
                                </address>
                                <button id="cmdop">Generate PDF</button>
                            </footer>
                        </article>
                    </div>


                    <div role="tabpanel" class="tab-pane fade" id="seite5">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Rig Organisation</h1>
                            </header>
                            <div class="panel-body">
                                <figure class="pull-right bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myDrilling4" class="btn btn-lg btn-primary" data-toggle="modal"><span
                                                class="glyphicon glyphicon-play"></span> Launch
                                        Rig Staff Video</a>
                                    <!-- Modal HTML -->
                                    <div id="myDrilling4" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h4 class="modal-title">Rig Organisation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="drilling4Video" width="450" height="315"
                                                            src="https://www.youtube.com/embed/SfazJ6P_g7w"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="text-center"><strong>Launch Video</strong></figcaption>
                                </figure>
                                <div id="organisation">
                                    <h3> Roles and Responsibilities of Core Personnel</h3>
                                    <hr>
                                    <p>There follows a summary of roles and responsibilities for personnel which could
                                        be considered core to a well construction organisation. Note that titles are by
                                        no means standard and that there are probably as many ways to organise for well
                                        construction as there are oil companies. While the positions may not be
                                        replicated, the responsibilities and accountabilities should be addressed in any
                                        organisation.
                                    </p>
                                    <h3>Drilling Manager</h3>
                                    <hr>
                                    <p>The Drilling Manager has overall responsibility for a well construction
                                        department or discipline to manage its business objectives within the greater
                                        organisation it serves. Specific responsibilities should include:</p>
                                    <ul>
                                        <li>Overall accountability for safety of operations;
                                        </li>
                                        <li>Setting, monitoring and reporting of performance measures for the department
                                            or discipline;
                                        </li>
                                        <li>Making sure that adequate resources exist to fulfil business plans (e.g,
                                            personnel, rigs, equipment);
                                        </li>
                                        <li>Ensuring that processes and procedures exist which comply with local
                                            legislative requirements and internal standards;
                                        </li>
                                        <li>Recruitment, personnel development and appraisal;
                                        </li>
                                        <li>Representation of the well construction organisation internally and
                                            externally including management of conflict.
                                        </li>
                                    </ul>
                                    <h3>Drilling Superintendent</h3>
                                    <hr>
                                    <p>The Drilling Superintendent normally has direct operational responsibility for
                                        one or more rigs. Specific responsibilities should include:</p>
                                    <ul>
                                        <li>Line management responsibility for safety of operations;
                                        </li>
                                        <li>Accountability for operational performance including cost management;
                                        </li>
                                        <li>Ensuring wells are planned and constructed as per internal processes;
                                        </li>
                                        <li>Operational supervision;
                                        </li>
                                        <li>Line management of operational personnel;
                                        </li>
                                        <li>Performance management of third party services;
                                        </li>
                                        <li>Client, partner and government liaison.</li>
                                    </ul>
                                    <p>Dependent on the size of the organisation and scope of work the Drilling Manager
                                        and Drilling Superintendent roles may merge.</p>
                                    <h3>Engineering Manager</h3>
                                    <hr>
                                    <p>The Engineering Manager has responsibility for the engineering discipline and
                                        standards within a well construction organisation. The main responsibilities
                                        are:</p>
                                    <ul>
                                        <li>Maintenance of technical standards and procedures for engineering
                                            activities;
                                        </li>
                                        <li>Audit/review/approval of well design proposals;
                                        </li>
                                        <li>Technical overview of special studies and early project activities;
                                        </li>
                                        <li>Maintenance of technical competence for engineering staff;
                                        </li>
                                        <li>Technical development of engineers;
                                        </li>
                                        <li>Knowledge transfer;
                                        </li>
                                        <li>Implementation and management of work systems.</li>
                                    </ul>
                                    <h3>Drilling Engineer</h3>
                                    <hr>
                                    <p>The Drilling Engineer is responsible to the Drilling Superintendent for the safe
                                        engineering and design of the wells. Specific responsibilities are:</p>
                                    <ul>
                                        <li> Act as the ‘Focal Point’ for Clients to ensure all well objectives are
                                            identified and met;
                                        </li>
                                        <li>Production of safe / achievable design taking into account known or probable
                                            hazards;
                                        </li>
                                        <li>Production of detailed Time Cost Estimates for the well, and monitoring well
                                            costs to ensure that they are accurate;
                                        </li>
                                        <li>Production of operational programmes;
                                        </li>
                                        <li>Ensuring that the relevant Government Notifications and Approval requests
                                            are submitted it time to achieve the planned start date, and confirming that
                                            they are in place before the relevant work commences;
                                        </li>
                                        <li>Sourcing all relevant material and services;
                                        </li>
                                        <li>Presentation and participation at relevant planning, pre-spud and wellsite
                                            meetings;
                                        </li>
                                        <li>Provision of office based support during operations;
                                        </li>
                                        <li>Timely compilation of well history and ad-hoc reports;
                                        </li>
                                        <li>Final archiving of well material and handover information to production
                                            organisation.
                                        </li>
                                    </ul>
                                    <p>As well as having direct accountability to the Drilling Superintendent the
                                        Drilling Engineer should also be accountable to the Engineering Manager for the
                                        following:</p>
                                    <ul>
                                        <li>Providing all necessary information, backup, and input to the engineering
                                            audit
                                            process;
                                        </li>
                                        <li>Ensuring that any requirements arising from risk assessments, peer reviews,
                                            audits etc. are actioned;
                                        </li>
                                        <li>Notification of any potential change to programme which requires review and
                                            approval;
                                        </li>
                                        <li>Adherence to approved technical standards and procedures.</li>
                                    </ul>
                                    <p>Dependent on organisational preference the Drilling Engineering role may be split
                                        whereby one engineer (or group) is responsible for the planning phase handing
                                        over to another engineer (or group) for the implementation phase. In this case
                                        clear demarcation is required to ensure that all responsibilities are assigned
                                        and understood.</p>
                                    <h3>Completions / Well Test Engineer</h3>
                                    <hr>
                                    <p>Increasingly the role of Completions or Well Test Engineer is differentiated from
                                        that of Drilling Engineer especially in larger organisations and for more
                                        complex operations. These roles specialise in the activities performed after a
                                        well has been drilled. The Completions Engineer deals with the design and
                                        installation of the permanent conduit which allows production from or injection
                                        to the well. The Well Test Engineer deals with the design and operation of
                                        temporary completions and surface equipment to allow short term production from
                                        or injection to a well for evaluation purposes. Because the knowledge and skills
                                        required for each role are largely complimentary they are treated as one for the
                                        purpose of this module.</p>
                                    <p>Although a specialised role within the overall Well Construction process it
                                        should not be surprising that the generic responsibilities are identical to
                                        those for the Drilling Engineer as listed above.</p>
                                    <h3>Drilling Supervisors</h3>
                                    <hr>
                                    <p>Drilling Supervisors are responsible to the Drilling Superintendent for the safe,
                                        cost effective and environmentally aware delivery of the well programme. The
                                        position acts as the on site co-ordinator responsible for translation of the
                                        overall work programme into the finished product. In particular, they are
                                        responsible for:</p>
                                    <ul>
                                        <li>Direct liaison with the offshore rig management for all aspects of company
                                            business. This includes monitoring safe working practices.
                                        </li>
                                        <li>Liaison with the Drilling Superintendent during operations including formal
                                            reporting;
                                        </li>
                                        <li>Monitoring of progress against the well programme and the Drilling
                                            Superintendent of any deviation from the programme;
                                        </li>
                                        <li>Preparation of specific work instructions for the rig crew;
                                        </li>
                                        <li>Evaluating and reporting on the quality of service and HS&E performance of
                                            the rig contractor and service companies;
                                        </li>
                                        <li>Liaison between the installation and the onshore emergency response room in
                                            the event of an incident, emergency, or oil spill;
                                        </li>
                                        <li>Specialist advice and guidance to the rig on well control;
                                        </li>
                                        <li>Technical control of third party contractors on the rig;
                                        </li>
                                        <li>Calling off and returning materials and services;
                                        </li>
                                        <li>Controlling costs within their sphere of responsibility;
                                        </li>
                                        <li>Timely compilation of daily and ad-hoc reports for transmission to the base
                                            office;
                                        </li>
                                        <li>Supervision and development of wellsite engineers.</li>
                                    </ul>
                                    <p>To assist in their duties Drilling Supervisors may be supplemented with wellsite
                                        engineers and materials / logistics co-ordinators.</p>
                                    <h3>Roles and Responsibilities of Support Organisations</h3>
                                    <hr>
                                    <h4>Client Group</h4>
                                    <hr>
                                    <p>The client group is invariably the central customer for supply of well
                                        construction services so it may seem strange to list them here as support. It
                                        is, however, helpful to regard this group as support when considering all inputs
                                        required to plan and execute a successful operation. The main requirements from
                                        the client group are:</p>
                                    <ul>
                                        <li>Supply of well objectives;
                                        </li>
                                        <li>Supply of prognosed geology;
                                        </li>
                                        <li>Determination of expected sub-surface hazards;
                                        </li>
                                        <li>Details of evaluation requirements during the construction process;
                                        </li>
                                        <li>Assistance with site survey planning and evaluation (especially geophysical
                                            support);
                                        </li>
                                        <li>Scheduling information;
                                        </li>
                                        <li>Wellsite support for geological evaluation;
                                        </li>
                                        <li>Evaluation of well performance.</li>
                                    </ul>
                                    <h3>Health, Safety and Environmental</h3>
                                    <hr>
                                    <p>In the ever developing area of Health, Safety and the Environmental awareness and
                                        compliance, it is important to have access to strong support which ensures that
                                        full consideration is given during the planning and execution of well
                                        activities. Required areas of support include:</p>

                                    <ul>
                                        <li>Development of HS&E policy, plans and goals;
                                        </li>
                                        <li>Promotion of an active HS&E culture;
                                        </li>
                                        <li>Monitoring of HS&E performance, both internal and of suppliers;
                                        </li>
                                        <li>Organisation of audits and investigations;
                                        </li>
                                        <li>Legislation awareness and implementation;
                                        </li>
                                        <li>Emergency and oil spill response.</li>
                                    </ul>
                                    <h3>Fiscal</h3>
                                    <hr>
                                    <p>Control of financial matters is central to any construction project and this is
                                        no different for the well construction business. Areas for which support is
                                        required include:</p>
                                    <ul>
                                        <li>Creation and maintenance of cost control systems;
                                        </li>
                                        <li>Participation in cost estimation;
                                        </li>
                                        <li>Cost tracking and forecasting including final estimate once work complete;
                                        </li>
                                        <li>Financial audit participation and reporting;
                                        </li>
                                        <li>Invoice processing and payment;
                                        </li>
                                        <li>Reconciliation of charged costs to final estimated costs.</li>
                                    </ul>
                                    <h3>Contracts</h3>
                                    <hr>
                                    <p>The materials and services required for a well operation are many and complex. It
                                        is important to cover supply with clear contractual arrangements which are
                                        understood by both parties (supplier and receiver). Support is required in the
                                        following areas:</p>
                                    <ul>
                                        <li>Compilation of tender documentation;
                                        </li>
                                        <li>Issuance of bid documents and focal point for related communications;
                                        </li>
                                        <li>Non-technical aspects of bid evaluation;
                                        </li>
                                        <li>Negotiation of terms and conditions;
                                        </li>
                                        <li>Evaluation compilation;
                                        </li>
                                        <li>Ongoing contract administration and interpretation;
                                        </li>
                                        <li>Provision of market information, especially for rigs.</li>
                                    </ul>
                                    <h3>Materials and Logistics</h3>
                                    <hr>
                                    <p>One of the most challenging aspects of delivering a well executed operational
                                        programme is to ensure the availability of the correct equipment at the
                                        correct time. In order to achieve this support is required as follows:</p>
                                    <ul>
                                        <li>Maintenance of stock equipment lists;
                                        </li>
                                        <li>Storage of equipment;
                                        </li>
                                        <li>Assistance in preparation of load out lists;
                                        </li>
                                        <li>Co-ordination of Quality Control / Quality Assurance processes;
                                        </li>
                                        <li>Organisation of transport (land, helicopters, boats);
                                        </li>
                                        <li>Liaison with suppliers for delivery of equipment and personnel.</li>
                                    </ul>


                                </div>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">&copy; RGU
                                </address>
                                <button id="cmdorganisation">Generate PDF</button>
                            </footer>
                        </article>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section><!-- end of section-->
<hr> <!-- draw a line-->
<footer>
    <!-- footer area-->
    <div>
        <?php include '../include/footer.php'; ?>
    </div>
</footer>
<!-- Latest compiled JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> <!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    // var doc = new jsPDF('p', 'pt', 'a4');
    //var specialElementHandlers = {
    //  var specialElementHandlers = {};

    //$('#cmddrill').click(function () {
    //  doc.fromHTML($('#drill').html(), 15, 15, {
    //    'width': 250,
    //  'margin': 1,
    //'pagesplit': true,
    //'elementHandlers': specialElementHandlers
    //});
    //doc.save('Well-Drilling-Objectives.pdf');
    //});
    //doc = "";

    //<script>

</script>
</script>
<
script >;
    var doc = new jsPDF('p', 'pt', 'a4');
    var specialElementHandlers = {};

    $('#cmdplanning').click(function () {
        doc.fromHTML($('#planning').html(), 15, 15, {
            'width': 250,
            'margin': 1,
            'pagesplit': true,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-Planning-Objectives.pdf');

    });
    doc = "";
</script>
<script>
    var doc = new jsPDF('p', 'pt', 'a4');
    var specialElementHandlers = {};
    $('#cmdenv').click(function () {
        doc.fromHTML($('#env').html(), 15, 15, {
            'width': 250,
            'margin': 1,
            'pagesplit': true,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-Environmental-Objectives.pdf');
    });
    doc = "";
</script>
<script>
    var doc = new jsPDF('p', 'pt', 'a4');
    var specialElementHandlers = {};
    $('#cmdop').click(function () {
        doc.fromHTML($('#op').html(0), 15, 15, {
            'width': 250,
            'margin': 1,
            'pagesplit': true,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-Operation-Objectives.pdf');
    });
    doc = "";
</script>
<script>
    var doc = new jsPDF('p', 'pt', 'a4');
    var specialElementHandlers = {};
    $('#cmdorganisation').click(function () {
        doc.addHTML($('#organisation').html(0), 15, 15, {
            'width': 250,
            'margin': 1,
            'pagesplit': true,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-Organisation-Objectives.pdf');
    });
    doc = "";
</script>
</body>
</html>