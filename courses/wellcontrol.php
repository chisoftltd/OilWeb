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
    <script src="/js/jspdf.min.js"></script>
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
            <li><a href="/menu/courses.php">Courses</a></li>
            <li class="active">Control</li>
        </ul>
        <div class="container-fluid" style="background-color: #b0e0e6">
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
                                <h4>Lost Circulation</h4>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#seite4" data-toggle="tab" aria-controls="seite4" role="tab">
                                <h4>Surface Well Control Equipment</h4>
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
                                <h4>For offline reading click below to </h4>
                                <div id="editor"></div>
                                <button id="cmdcontrol">Generate PDF</button>
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
                                                <!--<div class="modal-body">
                                                   <iframe id="control4Video" width="450" height="315"
                                                           src="https://www.youtube.com/embed/cYkFwD3RQ7k"
                                                           frameborder="0" allowfullscreen></iframe>
                                               </div>-->
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
                                    <div class="equ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h3>Equation 1</h3>
                                            </div>
                                            <div class="col-md-9">
                                                MAASP = Formation BreakDown Pressure - Head of mud in use
                                                <br>
                                                or

                                                MAASP = (E.M.W - MWMUD) x 0.052 x Shoe Depth (TVD)
                                                <br>
                                                Where

                                                <br> E.M.W = Equivalent mud weight at which formation breaks at shoe
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

                                    <h3>Pump, String, and Hole Configuration.</h3>
                                    <hr>
                                    <p>This includes the data used for the determination of the lag time (surface to bit
                                        and bit to surface) and contains:</p>
                                    <ul>
                                        <li>
                                        </li>
                                        <li>Pump capacity
                                        </li>
                                        <li>Hole size
                                        </li>
                                        <li>Drill string capacity (internal volume)
                                        </li>
                                        <li>BHA capacity
                                        </li>
                                        <li>Annular capacity (bit to casing shoe and casing shoe to BOP)
                                        </li>
                                        <li>Casing data (size, weight, burst pressure, shoe depth)
                                        </li>
                                        <li>The worksheet includes the space to fill in lag time in strokes or minutes
                                            for the proposed kill rate.
                                        </li>
                                    </ul>
                                    <p>
                                        This estimation is usually computerised and continuously logged. IT IS
                                        IMPORTANT THAT YOU KNOW HOW TO CALCULATE THESE THINGS WITHOUT A
                                        COMPUTER.
                                    </p>
                                    <h3> Kick Detection Techniques.</h3>
                                    <p>There are a number of indicators that provide early warning of kick occurrence.
                                        Positive kick indicators are:</p>
                                    <ul>
                                        <li>

                                            Mud pit level/flow increase
                                        </li>
                                        <li> Incorrect hole fill up during trip
                                        </li>
                                        <li> Decrease in standpipe pressure/increase in pump rate
                                        </li>
                                        <li> Increase/decrease in drill stem weight.

                                        </li>
                                    </ul>
                                    <p>
                                        Potential indicators are:</p>
                                    <ul>
                                        <li>
                                        </li>
                                        <li> Increase in penetration rate;
                                        </li>
                                        <li> Lost circulation;
                                        </li>
                                        <li> Changes in gas levels, mud density and mud conductivity.

                                        </li>
                                    </ul>
                                    <p>Parameters used for detecting abnormal pressure zones are also potential kick
                                        indicators. These include:
                                    </p>
                                    <ul>
                                        <li>
                                        </li>
                                        <li> Torque, overpull and drag;
                                        </li>
                                        <li> Shale caving increase;
                                        </li>
                                        <li> Shale density/shale factor changes;
                                        </li>
                                        <li> Flowline mud temperature changes;
                                        </li>
                                        <li> ‘d’ Exponent changes.

                                        </li>
                                    </ul>
                                    <p> The surest indicators of a kick occurring are <strong>Mud Pit Level Increase and
                                            Flow
                                            Increase together.</strong>
                                    </p>
                                    <h3>Incorrect Fill-up During Trips</h3>
                                    <p>When pulling out of the hole, if the volume of mud pumped to keep the hole full
                                        is less than that normally required, then there is an evidence of influx. The
                                        mud
                                        volume required should be equal to or slightly greater than the displacement of
                                        the drill pipe (normally five stands) pulled. Mud loggers and drilling engineers
                                        MUST follow trips even though an automatic trip monitor is usually used.</p>
                                    <p>Conversely during a trip into the hole, the downward movement of the drill pipe
                                        expels fluid from the annulus to the trip tank or active mud system. This return
                                        flow should cease a few seconds after pipe movement stops. If flow continues,
                                        then there is may be a kick.</p>
                                    <h3>Decrease in Standpipe Pressure/Increase in Pump Rate</h3>
                                    <p>As indicated in the U-tube analogy, influx of fluid into the annulus creates an
                                        imbalance resulting in a decrease in hydrostatic pressure in the annulus. In
                                        such
                                        an unbalanced system, gravity helps move drilling fluid down the hole, requiring
                                        less energy from the pump. This will result in a decrease in the standpipe
                                        pressure.</p>
                                    <p>This is not the only reason that there may be an increase in pump rate and
                                        decrease in standpipe pressure: a wash-out in the drill stem can also cause
                                        these
                                        indicators. It is important to pick up and check for flow. If there is no flow
                                        but
                                        the rate of change of pressure is showing an increasing trend, it is probably a
                                        wash-out. Either way, it cannot be ignored – action must be taken.</p>
                                    <h3>Increase/Decrease in Drill Stem Weight</h3>
                                    <p>Any influx into the wellbore from the formation reduces the density of the
                                        annular drilling fluid. This reduces the buoyant force acting upwards on the
                                        drill
                                        stem. A sensitive weight indicator will register this change as an increase in
                                        drill
                                        stem weight. For very large kicks, fluid may enter the annulus with enough force
                                        to cause a decrease in indicated string weight. At this point, you have probably
                                        left things too long and probably have a blowout on your hands.
                                    </p>
                                    <h3>Increase in Penetration Rate (Drilling Break)</h3>
                                    <p>A marked increase in rate of penetration (ROP) may indicate either changes in
                                        the type of formation being drilled or a reduction in the positive difference
                                        between the mud pressure and pore pressure.</p>
                                    <p>Generally, the following parameters affect the ROP:</p>
                                    <ul>
                                        <li>
                                            Rock type
                                        </li>
                                        <li> Formation bulk density/porosity
                                        </li>
                                        <li> Difference between mud pressure and formation pore pressure
                                        </li>
                                        <li> Bit type/wear
                                        </li>
                                        <li> Hydraulics
                                        </li>
                                        <li> Weight on bit
                                        </li>
                                        <li> Rotary speed
                                        </li>
                                        <li> Personnel/equipment.</li>
                                    </ul>
                                    <p>Drilling breaks (i.e. where the rate of penetration increases significantly) are
                                        generally evidence of porosity change. Drilling rate tends to decrease with
                                        depth.
                                        Thus when a drilling break occurs, it may be an evidence of transition to an
                                        abnormal zone. It is crucial at this point to stop drilling and check for flows.
                                    </p>

                                    <p>
                                        Remember that the work of drilling is a combination of work done by the bit and
                                        the mud impact, combined with the effect of pore pressure. If the latter exceeds
                                        the downward pressure from the mud, as rock is removed, the pore pressure will
                                        tend to break down the formation and assist the work of drilling.

                                    </p>
                                </div>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right"> &copy; RGU
                                </address>
                                <div id="editor"></div>
                                <button id="cmdswab" onclick="myFunction('swab')">Generate PDF</button>
                            </footer>
                        </article>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="seite3">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Lost Circulation</h1>
                            </header>
                            <div class="panel-body">
                                <figure class="pull-right bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myControl3" class="btn btn-lg btn-primary" data-toggle="modal"><span
                                                class="glyphicon glyphicon-play"></span> Launch
                                        Lost Circulation Video</a>
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
                                                <!--<div class="modal-body">
                                                    <iframe id="control4Video" width="450" height="315"
                                                            src="https://www.youtube.com/embed/cYkFwD3RQ7k"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="text-center"><strong>Launch Video</strong></figcaption>
                                </figure>
                                <div class="lostCriculation">

                                    <h3>Lost Circulation</h3>
                                    <p>Loss of substantial quantity of mud into the formation will result in reduction
                                        in
                                        hydrostatic column height. If not checked, this can result in a kick.</p>
                                    <h3>Changes in Gas Levels/Mud Density/Mud Conductivity</h3>
                                    <p>Gas extracted from the mud comes from one or more of four sources:</p>
                                    <ul>
                                        <li>
                                            <strong>Liberated gas</strong> which is the measured gas from the return mud
                                            flow,
                                            released from the pore spaces of the drilled cuttings. It is the so-called
                                            ‘background gas’ during circulation. If there is overbalance, and the ROP is
                                            constant with flow rate, this is liberated gas.
                                        </li>
                                        <li>
                                            <strong>Produced Gas</strong> enters the wellbore from adjacent permeable
                                            formations
                                            when underbalance exists. A background gas increase when ROP is
                                            constant is an indicator of produced gas, but…
                                        </li>


                                        <li><strong>Recycled Gas</strong> is the gas recirculated into the hole, which
                                            has not been
                                            removed in surface treatment. It appears on detection equipment as an
                                            increase in background levels.
                                        </li>
                                        <li><strong>Contamination Gas</strong> results from chemical breakdown of mud
                                            additives. It
                                            is usually due to bacterial action.
                                        </li>
                                        <li><strong>Connection Gas</strong> and Trip Gas are short duration gas peaks
                                            caused by
                                            swabbing action and occur with bottoms up (i.e. the mud which was at the
                                            bottom of the hole when the swabbing action occurred reaches surface).
                                    </ul>
                                    <p>Depending on sensitivity level, surface monitors should detect a relatively
                                        steady
                                        level of gas extracted from mud during normal drilling. This background gas
                                        level may show occasional variations depending on penetration rate, mud
                                        pumping rate and the hydrocarbon content of the section drilled. Under normal
                                        conditions, the background gas should remain within about 50% of local average.
                                        It is crucial that all gas values must be reported whether they are significant
                                        or
                                        not. Thorough inspection of gas monitoring systems and calibration as part of
                                        routine maintenance is essential to preventing potential disasters.</p>
                                    <p>
                                        Connection and trip gas are most common while drilling. The connection gas
                                        peaks are a clear sign that pressures are near balance, making for optimum ROP.
                                        Swabbing is the main cause of connection/trip gas as it creates negative
                                        differential pressure. Effects of gas expansion at surface are varied. Evidence
                                        includes:
                                    </p>
                                    <ul>
                                        <li>
                                            Rapid fall in flow line mud density
                                        </li>
                                        <li> Increase in return flow
                                        </li>
                                        <li> Mud pit level increase
                                        </li>
                                        <li> Rapid increase in total gas or hydrocarbon levels.
                                        </li>
                                    </ul>
                                    <h3>Well Control Procedures</h3>
                                    <p>Control procedures must be initiated immediately after a kick has been detected.
                                        Decisions concerning control operation rest on the Company man (the Operator’s
                                        representative) as well as on the on-site Tool Pusher and drilling engineer. The
                                        mud loggers and drilling engineers are responsible for monitoring and recording
                                        circulation pressures, gas and pump strokes. The primary and secondary well
                                        controls involve the prevention or the removal of influx without damage to the
                                        hole, personnel or equipment as well as prevention of further influx.</p>
                                    <p>Kick control procedures involve the following: </p>
                                    <ol>
                                        <li>
                                            Shut in the well - follow a predefined procedure
                                        </li>
                                        <li> Observe shut-in pressures and kick volume
                                        </li>
                                        <li> Make kill calculations for:
                                        </li>
                                        <ul>
                                            <li>
                                                Formation pressure
                                            </li>
                                            <li>BHP to maintain while circulating
                                            </li>
                                            <li>Kill mud density
                                            </li>
                                            <li>Initial and final circulation pressures
                                            </li>
                                            <li>Drill pipe pressure schedules
                                            </li>
                                            <li>Weighting material volume required
                                            </li>
                                        </ul>

                                        <li> Define weighing up and circulating
                                            procedure using one of the following
                                            methods:
                                        </li>
                                        <ul>
                                            <li>
                                                Driller’s method
                                            </li>
                                            <li>Wait and Weight method (Engineer’s
                                                method)
                                            </li>
                                            <li>Concurrent method (circulate and
                                                weight)
                                            </li>
                                            <li>Top Kill method.</li>
                                        </ul>
                                        The first two are preferred for kicks during drilling. The concurrent method
                                        requires greater skill and care. The Top Kill method is used when it is
                                        impossible to get proper circulation around the system via the drill stem or
                                        tubing, or doing so would cause greater problems (exceeding MAASP,
                                        casing burst pressure etc).
                                        <li>
                                            Make interpretation of the influx
                                            including:
                                        </li>
                                        <ul>
                                            <li>Height and density of influx.
                                            </li>
                                            <li>Annulus pressure behaviour while
                                                circulating.
                                            </li>
                                        </ul>
                                        <li>Proceed with circulation using the
                                            following guide rules:
                                        </li>
                                        <ul>
                                            <li>
                                                At all times during circulation, the Bottom Hole Pressure (BHP) must
                                                be high enough to prevent further influx;
                                            </li>
                                            <li>For the safety of the rig and
                                                personnel,
                                                surface pressure should not
                                                at any time exceed the predetermined MAASP value.
                                            </li>
                                        </ul>
                                    </ol>
                                    <p>Maintenance of BHP at the proper level is through the application of back
                                        pressure via the adjustable choke.</p>
                                    <p>
                                        A uniform kick control worksheet should be issued to all well control personnel.
                                        Any method based on the above rules is a constant or balanced BHP method of kick
                                        control. The variation of the Balanced BHP method is common in different well
                                        site. Use differs in the circulation procedure. The methods are based in the
                                        step by step procedures listed above but may vary depending on the following
                                        situations:</p>
                                    <ul>
                                        <li>The bit is at or near bottom
                                        </li>
                                        <li>The top of the influx is below the casing shoe - the weakest point
                                        </li>
                                        <li>The influx is gas.</li>
                                    </ul>

                                    <p>If the bit is off bottom or top of the influx is above casing shoe, successful
                                        influx control may require special procedures. To permit circulation from just
                                        off bottom, it would be normal to run in or strip the string back to bottom.
                                        Stripping requires the pipe to be run back in with either the annular BOP or
                                        pipe rams closed around the pipe, carefully maintaining back-pressure on the
                                        well.
                                    </p>
                                </div>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">&copy; RGU
                                </address>
                                <div id="editor"></div>
                                <button id="cmdlostC" onclick="myFunction('lostCriculation')">Generate PDF</button>
                            </footer>
                        </article>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="seite4">
                        <article class="panel panel-default">
                            <header class="panel-heading">
                                <h1 class="text-muted text-center"><span class="glyphicon glyphicon-pencil"></span>
                                    Surface Well Control Equipment</h1>
                            </header>
                            <div class="panel-body">
                                <figure class="pull-right bs-example">
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a href="#myControl4" class="btn btn-lg btn-primary" data-toggle="modal"><span
                                                class="glyphicon glyphicon-play"></span> Launch
                                        Well Control Video</a>
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
                                                <!--<div class="modal-body">
                                                    <iframe id="control4Video" width="450" height="315"
                                                            src="https://www.youtube.com/embed/cYkFwD3RQ7k"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="text-center"><strong>Launch Video</strong></figcaption>
                                </figure>
                                <div id="surface">
                                    <h3>Surface Well Control Equipment</h3>
                                    <p>The control equipment is laid out as shown in Figure 1 and is made up of:</p>
                                    <ol>
                                        <li>Blow out preventers - Usually mounted in a stack including annular and ram
                                            type preventers. Figure 2 is an example of a BOP stack arrangement of single
                                            ram units and annular unit for surface use, showing operation of different
                                            components. Figure 3 shows two different makes of annular BOP with varying
                                            sealing element design. Principles of operation are essentially the same in
                                            both cases; it is the method of deformation of the element that is
                                            different.
                                        </li>
                                        <li>Drilling Spool (Figure 2) for attachment of high pressure choke and kill
                                            lines, for circulation with the BOP closed.
                                        </li>
                                        <li>Casing head (Figure 2) - This is welded to the first surface casing and it
                                            provides support and pressure seal for the BOP stack and future casing
                                            strings.
                                        </li>
                                        <li>Choke Manifold and Control Panel (Figure 4 and 5) - To control flow of
                                            produced fluids and route them to separator, flare or holding tank or pit. A
                                            typical choke manifold includes:
                                        </li>
                                        <ul>
                                            <li>One hydraulically operated BOP outlet
                                                valve
                                                for positive closure
                                            </li>
                                            <li>Two to four adjustable chokes
                                                (variable-opening valves). One or more may be remotely actuated, the
                                                others
                                                are usually directly operated by handwheel
                                            </li>
                                            <li>Several manual gate valves.</li>
                                            <li>The adjustable chokes permit precise control of return flow rate and
                                                back
                                                pressure.
                                            </li>
                                            <li>Kelly Cock, Float Valve or Inside BOP
                                                (Figure 6) - To prevent back flow via the drill pipe.
                                            </li>
                                        </ul>
                                        <li>Mud/Gas separators and Degassers -
                                            Equipment for removing gas from mud.
                                        </li>
                                    </ol>
                                    <p>For subsea well control equipment, the layout and configuration are rather
                                        different. They may include (Figures 7 and 8):</p>
                                    <ul>
                                        <li>Templates - Temporary and permanent guide bases
                                        </li>
                                        <li>Subsea BOP stack
                                        </li>
                                        <li>Marine riser, etc.</li>
                                    </ul>
                                    <p>Figure 9 shows a double ram type BOP unit generally used in sub-sea BOP stacks,
                                        and examples of the internal components used in ram type BOPs.</p>
                                    <figure>
                                        <img src="/images/surfaceequipment.jpg" alt="Surface Well Equipment"
                                             style="width: 65%; height: 50%; margin-left: 15%">
                                        <figcaption><strong>Figure 1.</strong> Layout of Surface Well Control Equipment.
                                        </figcaption>
                                    </figure>
                                    <p></p>
                                    <figure>
                                        <img src="/images/conventionalbopstack.jpg" alt="Conventional BOP Stack"
                                             style="width: 65%; height: 50%; margin-left: 15%">
                                        <figcaption><strong>Figure 2.</strong> Conventional BOP Stack.
                                        </figcaption>
                                    </figure>
                                    <figure>
                                        <img src="/images/annularbopcomponents.JPG" alt="Annular BOP Components"
                                             style="width: 50%; height: 50%; margin-left: 15%">
                                        <figcaption><strong>Figure 3.</strong> Annular BOP Components.
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <footer class="panel-footer clearfix ">
                                <address class="pull-right">&copy; RGU
                                </address>
                                <div id="editor"></div>
                                <button id="cmdsurface" onclick="myFunction('surface')">Generate PDF</button>
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
            'width': 150,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-control-Objectives.pdf');
    });
    /*doc = null;

    doc = new jsPDF();
    $('#cmdswab').click(function () {
        doc.fromHTML($('#swab').html(), 15, 25, {
            'width': 250,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-swabbing.pdf');
    });
    doc = null;

    doc = new jsPDF();
    $('#cmdlostC').click(function () {
        doc.fromHTML($('#lostC').html(), 15, 35, {
            'width': 400,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-Lost-Control.pdf');
    });
    doc = null;

    doc = new jsPDF();
    $('#cmdsurface').click(function () {
        doc.fromHTML($('#surface').html(), 15, 45, {
            'width': 550,
            'elementHandlers': specialElementHandlers
        });
        doc.save('Well-surface-equipment.pdf');
    });
     doc = null;*/


    function myFunction(dName) {

        var printContents = document.getElementById(dName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        if (!window.print()) {
            return;
        }
        window.print();
        window.location.reload();
        //document.body.innerHTML = originalContents;
    }

</script>
</body>
</html>