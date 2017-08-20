<?php
/**
 * Created by PhpStorm.
 * User: 1609963
 * Date: 29/07/2017
 * Time: 15:44
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
    <title>WebOil - Well Control Course</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add JavaScript file-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
    <script src="/js/weboil.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
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
                <a class="navbar-brand" href="/index.php">WebOil | Well Control</a>
            </div>
            <div class="collapse navbar-collapse" id="navweboil">
                <ul class="nav navbar-nav navbar-right">
                    <!-- check if same user is still same as the active session user and load appropriate menu options -->
                    <?php if (isset($_SESSION['usr_id'])) { ?>
                        <li class="active"><a href="signinindex.php">Home</a></>
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
    <div class="content">
        <ul class="breadcrumb">
            <li><a href="/index.php">Home</a></li>
            <li><a href="/contact.php">Courses</a></li>
            <li class="active">Control</li>
        </ul>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group nav" role="tablist">
                        <li class="list-group-item">
                            <a href="#seite1" data-toggle="tab" aria-controls="seite1" role="tab">
                                <h4>Well Control</h4>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#seite2" data-toggle="tab" aria-controls="seite2" role="tab">
                                <h4>Excessive Swabbing</h4>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#seite3" data-toggle="tab" aria-controls="seite3" role="tab">
                                <h4>Activity Descriptions cont...</h4>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#seite4" data-toggle="tab" aria-controls="seite4" role="tab">
                                <h4>Activity Descriptions cont...</h4>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="seite1">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Well Control</h1>
                            </header>
                            <div class="panel-body">
                                <figure class="pull-right bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myControl1" class="btn btn-lg btn-primary" data-toggle="modal"><span
                                                class="glyphicon glyphicon-play"></span> Launch
                                        Well Control Video</a>
                                    <!-- Modal HTML -->
                                    <div id="myControl1" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h4 class="modal-title">Oil and Gas Well Control</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="control1Video" width="450" height="315"
                                                            src="https://www.youtube.com/embed/cYkFwD3RQ7k"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="text-center"><strong>Launch Video</strong></figcaption>
                                </figure>
                                <div id="control">
                                    <h2>Well Control</h2>
                                    <p> This topic discusses the causes of a kick, methods of kick detection, well
                                        control
                                        procedures, and the components and function of surface and subsea well control
                                        equipment.</p>
                                    <h3>Kick Causes</h3>
                                    <hr>
                                    <p>A kick is the term used to describe the inflow of formation fluid into the
                                        wellbore
                                        during a drilling operation. This mainly arises due to the formation pore
                                        pressure
                                        being greater than the hydrostatic pressure imposed by the mud column. This
                                        can happen in a normally or abnormally geopressured formation.
                                        A kick may be composed of water (usually salt water), oil, natural gas or a
                                        combination of these fluids. The influx of formation fluid may arise for a
                                        variety
                                        of reasons. The four main causes are</p>
                                    <ul>
                                        <li>Insufficient mud weight</li>
                                        <li>
                                            Not keeping the hole full
                                        </li>
                                        <li>
                                            Swabbing
                                        </li>
                                        <li>
                                            Loss of circulation (partial or complete).
                                        </li>
                                        <li>
                                    </ul>

                                    <p>Kicks generally occur during trips, with influx occurring from a combination of
                                        the
                                        effects of swabbing and failure to keep the hole full. Swabbing is primarily the
                                        result of the viscous drag between the upward-moving drill stem and the
                                        downward-moving mud. The latter is moving downwards to replace the volume
                                        of drill-stem equipment removed from the hole (the open-end displacement).
                                        The faster the pipe is moved, the greater this viscous drag becomes, hence the
                                        greater the reduction in annulus pressure.</p>
                                    <p>
                                        There is also the ‘piston effect’ of the bit and stabilisers, if they are
                                        ‘balled-up’
                                        with mud and clay. <strong>It must be realised that this is not, normally, the
                                            primary cause of swabbing.</strong>
                                    </p>
                                    <p>Kicks occur during drilling operations most often because of insufficient mud
                                        weight. </p>

                                    <h3>Insufficient Mud Weight
                                    </h3>
                                    <hr>
                                    <p>Insufficient mud weight may occur due to:
                                    </p>
                                    <ul>
                                        <li>
                                            Penetration of an abnormal pressure zone.
                                        </li>
                                        <li>
                                            Accidental dilution of the mud by fluid addition at surface. (This occurs
                                            more often than it should. Usually a water valve is left open during a
                                            period of fast drilling through clay-rich formations and gets forgotten.)
                                        </li>
                                        <li>
                                            Dilution of mud by influx from an aquifer exposed to open hole.
                                        </li>
                                        <li>
                                            Gradual mud density reduction due to gas cut and failure to degas the
                                            mud at surface.
                                        </li>
                                        <li>
                                            Improper mud mixing and poor quality control in measurement.
                                        </li>
                                    </ul>
                                    <p> For strategic operational reasons, a borehole may be drilled underbalanced with
                                        a controlled kick (i.e. continuous production) taking place. This requires
                                        specialised systems and equipment and is beyond the scope of this present
                                        module.
                                    </p>
                                    <hr>
                                    <h3>Low Level of Drilling Fluid Column</h3>
                                    <p>Two conditions may lower the fluid column in the annulus. These are:</p>
                                    <ul>
                                        <li>
                                            Failure to keep the hole full during a trip.
                                        </li>
                                        <li>Failure to keep the hole full during a trip.</li>
                                        </li>
                                        Lost circulation during drilling.
                                        <li>
                                    </ul>
                                    <p>
                                        In pulling out the drill stem, the driller must refill the hole with mud of
                                        equivalent
                                        volume. Monitoring the volume of mud filling the hole is done with the use of
                                        the
                                        Trip Tank. (This may be known as the “Possum belly” on some rigs.
                                        Unfortunately, this term is used to refer to different things on different rigs,
                                        so
                                        avoid it.)</p>
                                    <P>
                                        The trip tank is a small mud tank (approx. 50bbls) separate from the active
                                        pits.
                                        This trip tank is equipped with a volume gauge that can be monitored from the
                                        rig floor and/or mud loggers’ console. In monitoring the trip, the driller must
                                        calculate the theoretical mud volume displaced by one or five stands of drill
                                        pipe.
                                        During the trip, the driller then measures the actual mud volume pumped into
                                        the hole for each stand of pipe pulled.</p>
                                    <P>
                                        Lost circulation is the loss of substantial quantity or whole mud into the
                                        formation. It may occur as a result of:</p>
                                    <ul>
                                        <li>Mud loss to a porous, cavernous or vuggy formation.</li>
                                        <li>
                                            Penetration of depleted or subnormal zones.
                                        </li>
                                        <li>
                                            Mud loss to fractures opened by excessive annulus pressure. This may be
                                            due to annular blockage, surge pressures, excessive hydraulics, pressures
                                            imposed to break mud gel strength.
                                    </ul>
                                    <p> Lost circulation will result in insufficient mud column and thus reduction in
                                        bottom-hole pressure. A kick due to lost circulation can be a major well control
                                        problem. When the well is shut in, an underground blow-out can occur, where
                                        the high-pressure formation ‘supercharges’ the lower pressure formation. This
                                        has been known to cause contamination of aquifers and other regrettable
                                        problems.</p>
                                </div>
                            </div>
                            <footer class="panel-footer clearfix">
                                <address class="pull-right">&copy; RGU
                                </address>
                                <div id="editor"></div>
                                <button id="cmdcontrol">generate PDF</button>
                            </footer>
                        </article>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="seite2">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Excessive Swabbing</h1>
                            </header>
                            <div class="panel-body">
                                <figure class="pull-right bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myControl2" class="btn btn-lg btn-primary" data-toggle="modal"><span
                                                class="glyphicon glyphicon-play"></span> Launch
                                        Swabbing Video</a>
                                    <!-- Modal HTML -->
                                    <div id="myControl2" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h4 class="modal-title">Oil and Gas Well Control</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="control2Video" width="450" height="315"
                                                            src="https://www.youtube.com/embed/cYkFwD3RQ7k"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="text-center"><strong>Launch Video</strong></figcaption>
                                </figure>
                                <div id="swab">
                                    <h3>Excessive Swabbing</h3>
                                    <p>As noted earlier, swabbing is the reduction of bottom hole pressure caused by
                                        upward pipe movement. As the pipe is being pulled out during trips, mud flows
                                        down through the annulus to replace the volume of drilling tools removed from
                                        the hole. There is, thus, viscous drag between upward-moving drill stem and the
                                        mud, and between the downward mud flow and the casing/hole. This causes a
                                        frictional pressure loss in the direction of the surface. The result is reduced
                                        bottom hole pressure. The higher the trip speed, the worse this effect. The swab
                                        pressure depends on:</p>
                                    <ul>
                                        <li>Pipe velocity.</li>
                                        <li>Bit and/or BHA ‘balling’</li>
                                        <li>
                                            Clearance between pipe and hole - the smaller the annular cross section,
                                            the greater the swabbing action.
                                        </li>
                                        <li>
                                            Mud rheology - the higher the viscosity, the greater the swabbing action.
                                        </li>
                                    </ul>
                                    <h3>Excessive Drilling Rate in Gas-Bearing Formations</h3>
                                    <hr>
                                    <p>The densities of formation fluids (gas, oil or water) are much lower than that of
                                        conventional drilling fluids. Any influx of formation fluid therefore reduces
                                        the
                                        mud density in the annulus. This influx, otherwise known as mud cut, is
                                        measured using sensors that measure mud density and conductivity at injection
                                        and at flow line.</p>
                                    <p>Mud cut may occur from:</p>
                                    <ul>
                                        <li>
                                            Influx due to inadequate mud weight or swabbing
                                        </li>
                                        <li>Diffusion of fluid into the hole due to the pressure in the annulus being
                                            lower than the pore pressure
                                        </li>
                                        <li>Air entrained in mud during trips (the so-called ‘kelly air’)
                                        </li>
                                        <li>Expansion of drilled gas as it reaches the surface.

                                        </li>
                                    </ul>
                                    <p>The majority of such kick problems arise from the reduction of mud weight due
                                        to the expansion of drilled gas, especially in large diameter holes, such as
                                        surface holes drilled at high rates. For such holes drilled without a blowout
                                        preventer in place, a small reduction in mud weight can lead to a violent kick
                                        and
                                        with the loss of primary control, lead to a blowout.</p>
                                    <h3>Kick Detection</h3>
                                    <p>A kick can occur at any time while drilling a well. To prevent any major
                                        catastrophe, early kick detection is essential for proper well control. As a
                                        primary
                                        precaution, it is important for all personnel, including the mud logger, to be
                                        in a
                                        state of readiness. Certain pre-kick information must be collected and available
                                        for use in case a kick occurs. These include volumes and pressures data. A Kick
                                    </p>
                                    <h2>Pre-kick data requirements are as follows:</h2>
                                    <h3>Maximum Working Casing Pressure</h3>
                                    <p>The casing and blowout preventer (BOP) are designed for the different expected
                                        pressures during each drilling phase. This is determined during well planning
                                        and
                                        is generally the maximum pressure rating of the BOP and its outlets or 80% of
                                        the burst pressure of the last casing. The 80% consideration is a safety factor
                                        for
                                        the casing string.
                                    </p>
                                    <h3>Maximum Allowable Annulus Surface Pressure (MAASP)</h3>
                                    <p> This is the annulus pressure at the surface that corresponds to the pressure at
                                        the weakest point of the hole. Fracture gradient at the last casing shoe usually
                                        defines the weakest point. However; for some boreholes, the MAASP can be the
                                        casing burst pressure or BOP rupture pressure if they are less than the fracture
                                        gradient (this is poor well design) or a permeable or weaker formation in the
                                        open hole. The MAASP represents the maximum annulus pressure that can be
                                        tolerated without risking losses while controlling a kick. The MAASP is
                                        estimated
                                        from the following equation:</p>
                                    <div class="container equ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h3>Equation 1</h3>
                                            </div>
                                            <div class="col-md-9">
                                                <img src="/images/MAASP.JPG" alt="MAASP" width="491" height="150">
                                            </div>
                                        </div>
                                    </div>
                                    <h3>Rig Capacity for Weighting Mud</h3>
                                    <p> Although this data does not appear in the well-kill worksheet, it is important,
                                        as
                                        it defines the number of circulation cycles necessary to regain primary control
                                        with the given change of mud. The rig capacity depends on total reserves of
                                        weighting materials (Barites, etc) and the maximum rate of addition to system.
                                        The maximum rate of addition is measured in lb/min or kg/min. Backup supply
                                        MUST always be available on the rig.</p>

                                    <h3>System Pressure Losses (SPL) at Slow Pump Rate SPR
                                        (or Slow Circulation Rate - SCR)</h3>
                                    <p>Circulation at the normal pump rate for drilling may produce surface pressures
                                        greater than the MAASP. We use a slow pump rate to kill the well partly for this
                                        reason, but also because it gives us more time to think, to observe what is
                                        happening and to DO THE JOB CAREFULLY. Therefore a System Pressure Loss at
                                        Slow Pump Rate (SPR, or SCR – Slow Circulation Rate) for kick control must be
                                        determined at regular intervals. This is usually 20 or 30 strokes per minute for
                                        a
                                        large triplex pump.</p>
                                    <p>This slow rate must be taken:</p>
                                    <ul>
                                        <li>
                                        </li>
                                        <li>At the start of each tour
                                        </li>
                                        <li>If the mud weight changes
                                        </li>
                                        <li>If bit configuration changes (e.g. a nozzle becomes plugged)
                                        </li>
                                        <li>After bit and/or BHA changes.
                                        </li>
                                    </ul>
                                    <p>If a kick occurs, the influx will be circulated out at the predetermined slow
                                        circulation rate. This is called the kill rate. The pressure losses must always
                                        include the choke line pressure losses, especially offshore, with a subsea BOP,
                                        where this could be substantial.</p>
                                </div>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right"> &copy; RGU
                                </address>
                                <div id="editor"></div>
                                <button id="cmdswab"></button>
                            </footer>
                        </article>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="seite3">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Activity Descriptions cont...</h1>
                            </header>
                            <div class="panel-body">
                                <figure class="pull-right bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myControl3" class="btn btn-lg btn-primary" data-toggle="modal"><span
                                                class="glyphicon glyphicon-play"></span> Launch
                                        Demo Video</a>
                                    <!-- Modal HTML -->
                                    <div id="myControl3" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h4 class="modal-title">Oil and Gas Well Control</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="control3Video" width="450" height="315"
                                                            src="https://www.youtube.com/embed/cYkFwD3RQ7k"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="text-center"><strong>Launch Video</strong></figcaption>
                                </figure>
                                <h4><i>Environmental consent (DTI)</i></h4>
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
                                <p>After the end of operations communications to close out a specific well include:</p>
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
                                    responsibility remains to ensure that the well is fit for its intended purpose until
                                    it is finally abandoned. </p>
                                <h4><i>Well Design
                                    </i></h4>
                                <p>The following questions have to be adequately addressed before a design can be
                                    considered to be acceptable:
                                </p>
                                <hr/>
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
                                <h4><i>Sourcing of Materials and Services
                                    </i></h4>
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
                                    which lists all equipment required for the well. This assists in the callout of the
                                    required equipment at the appropriate time during the well and also serves as a
                                    check that nothing has been forgotten.</p>
                                <h4><i>Site Survey</i></h4>
                                <p>The requirement for a site survey prior to moving a rig onto a location must be
                                    determined. If a survey is required then it must be organised and performed in
                                    time to allow delivery of, and reaction to, the results.
                                </p>
                                <p>A site survey is normally performed to acquire data for the following reasons:</p>
                                <ul>
                                    <li>To identify significant debris on the seabed at the intended location;
                                    </li>
                                    <li> To assess the seabed anchor holding characteristics;
                                    </li>
                                    <li> To assess the potential for shallow gas in surface hole.</li>
                                </ul>
                                <p>For the UKCS it is a requirement to notify the DTI at least 28 days prior to the
                                    work. For certain areas there may be a seasonal limitation on the shooting of site
                                    survey seismic.</p>
                                <p>The survey itself is carried out from a specialised vessel. Typically the work
                                    involves shooting seismic of varying definition over a pre-planned grid which will
                                    cover the anchor pattern area and include a more concentrated grid around the
                                    proposed location for shallow gas definition. It is common for a consultant to be
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
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">&copy; RGU
                                </address>
                            </footer>
                        </article>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="seite4">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Activity Descriptions cont...</h1>
                            </header>
                            <div class="panel-body">
                                <figure class="pull-right bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myControl4" class="btn btn-lg btn-primary" data-toggle="modal"><span
                                                class="glyphicon glyphicon-play"></span> Launch
                                        Demo Video</a>
                                    <!-- Modal HTML -->
                                    <div id="myControl4" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h4 class="modal-title">Oil and Gas Well Control</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="control4Video" width="450" height="315"
                                                            src="https://www.youtube.com/embed/cYkFwD3RQ7k"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="text-center"><strong>Launch Video</strong></figcaption>
                                </figure>
                                <h4><i>Operational Plan</i></h4>
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
                                    <li>Description of the well design (e.g, casing specification and setting depths,
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
                                    equivalent of War and Peace. In consideration of the detail required it is useful to
                                    put yourself in the place of the well-site supervisor charged with delivering the
                                    well objectives</p>
                                <h4><i>Risk Identification and Mitigation
                                    </i></h4>
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
                                    construction process identification and understanding of risk should never be far
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
                                <h4><i>Time / Cost Estimate Generation
                                    </i></h4>
                                <p>The time / cost estimate is the cornerstone of a well construction organisations’
                                    commitment to the business it serves. It is a promise that the objectives will be
                                    delivered at a given cost. The fundamental issue with time/cost estimation is that
                                    business plans are often drawn up before the well is sufficiently defined both in
                                    terms of objectives and design. This is not such a concern if the well in question
                                    is a repeat of previous types but when dealing with new well types it is difficult
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
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">&copy; RGU
                                </address>
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
    var doc = new jsPDF();
    doc.setFont("courier");
    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };

    $('#cmdcontrol').click(function () {
        doc.fromHTML($('#control').html(), 15, 15, {
            'width': 100,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-control-Objectives.pdf');
    });

    $('#cmdswab').click(function () {
        doc.fromHTML($('#swab').html(), 15, 15, {
            'width': 100,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-swabbing.pdf');
    });

    $('#cmdenv').click(function () {
        doc.fromHTML($('#env').html(), 15, 15, {
            'width': 100,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-Environmental-Objectives.pdf');
    });

    $('#cmdop').click(function () {
        doc.fromHTML($('#op').html(), 15, 15, {
            'width': 100,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-Operation-Objectives.pdf');
    });
</script>

</body>
</html>