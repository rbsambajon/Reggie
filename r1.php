<html>
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"-->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../vendor/reportico-web/reportico/assets/bootstrap4/bootstrap.css">
    <link rel="stylesheet" href="../vendor/reportico-web/reportico/assets/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="style.css">
    <script src="../vendor/reportico-web/reportico/assets/node_modules/jquery/js/jquery.js"></script>
    <script src="../vendor/reportico-web/reportico/assets/bootstrap4/bootstrap.js"></script>



<div class="wrapper">

<div>

        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Reportico Builder</h3>
            </div>

            <ul class="list-unstyled components">

                                                            <li>
                            <a href="introduction.php?section=introduction">Introduction</a>
                        </li>
                                                                    <li>
                            <a href="syntax-overview.php?section=syntax-overview">Getting Started</a>
                        </li>
                                                                <li>
                        <a href="#basicsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Basics</a>
                    <ul class=" list-unstyled" id="basicsSubmenu">
                                            <li>
                            <a href="array-report.php?section=basics">Array Report</a>
                        </li>
                                            <li>
                            <a href="sql-report.php?section=basics">SQL Report</a>
                        </li>
                                            <li>
                            <a href="columns.php?section=basics">Columns</a>
                        </li>
                                            <li>
                            <a href="criteria.php?section=basics">Criteria</a>
                        </li>
                                            <li>
                            <a href="expressions.php?section=basics">Expressions</a>
                        </li>
                                            <li>
                            <a href="groups.php?section=basics">Groups</a>
                        </li>
                                            <li>
                            <a href="charts.php?section=basics">Charts</a>
                        </li>
                                            <li>
                            <a href="pages.php?section=basics">Pages</a>
                        </li>
                                            <li>
                            <a href="dynamic-tables.php?section=basics">Dynamic Tables</a>
                        </li>
                                            <li>
                            <a href="themes.php?section=basics">Themes</a>
                        </li>
                                        </ul>
                </li>
                                                        <li>
                        <a href="#output-formatsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Output Formats</a>
                    <ul class="collapse list-unstyled" id="output-formatsSubmenu">
                                            <li>
                            <a href="output-csv.php?section=output-formats">CSV Output</a>
                        </li>
                                            <li>
                            <a href="output-pdf.php?section=output-formats">PDF Output</a>
                        </li>
                                        </ul>
                </li>
                                                        <li>
                        <a href="#featuresSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Features</a>
                    <ul class="collapse list-unstyled" id="featuresSubmenu">
                                            <li>
                            <a href="features-dropdown-menu.php?section=features">Dropdown Menus</a>
                        </li>
                                            <li>
                            <a href="features-drilldown.php?section=features">Drilldown</a>
                        </li>
                                            <li>
                            <a href="features-form-layout.php?section=features">Form Layout</a>
                        </li>
                                            <li>
                            <a href="features-hide-sections.php?section=features">Hide Sections</a>
                        </li>
                                            <li>
                            <a href="features-relay.php?section=features">Passing Values to Report</a>
                        </li>
                                            <li>
                            <a href="features-relay-criteria.php?section=features">Passing Criteria to Report</a>
                        </li>
                                            <li>
                            <a href="features-styling.php?section=features">Styling</a>
                        </li>
                                        </ul>
                </li>
                                                        <li>
                        <a href="#projectsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Projects</a>
                    <ul class="collapse list-unstyled" id="projectsSubmenu">
                                            <li>
                            <a href="project-menu.php?section=projects">Show a Report Project Menu</a>
                        </li>
                                            <li>
                            <a href="project-prepare.php?section=projects">Project Report Criteria</a>
                        </li>
                                            <li>
                            <a href="project-execute.php?section=projects">Run a Project Report</a>
                        </li>
                                        </ul>
                </li>
                                                            <li>
                            <a href="designer-overview.php?section=designer-overview">Report Designer</a>
                        </li>
                                    </ul>
        </nav>

        <div id="content">

<h1>Array Report</h1>

A report can be generated just from supplying an array of data ( which could have be returned from a function ).
<br><br>
Use the databasesource()->array() method to achieve this...
<br><br>
The report column labels are derived from the array index keys. The labels are automatically capitalised and any underscores are replaced by spaces.
<br><br>



<div class="rounded" style="border:solid 1px #cccccc; padding: 10px">
<ul class="nav nav-pills" role="tablist">
    <li class="nav-item active"><a id="Usage" class="nav-link show active" data-toggle="tab" href="#tab-content-usage">Usage</a></li>
    <li class="nav-item"><a id="View Code" class="nav-link " data-toggle="tab" href="#tab-example-code">Try Example</a></li>
</ul>

<div class="tab-content">
    <div id="tab-content-usage"  class="tab-pane fade-in active">
    <br>
<code><span style="color: #000000">
<br /><span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">\</span><span style="color: #0000BB">Reportico</span><span style="color: #007700">\</span><span style="color: #0000BB">Engine</span><span style="color: #007700">\</span><span style="color: #0000BB">Builder</span><span style="color: #007700">::</span><span style="color: #0000BB">build</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;...<br />&nbsp;&nbsp;&nbsp;&nbsp;...<br />&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">datasource</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">array</span><span style="color: #007700">([&nbsp;..&nbsp;</span><span style="color: #0000BB">an&nbsp;</span><span style="color: #007700">array&nbsp;</span><span style="color: #0000BB">of&nbsp;data&nbsp;</span><span style="color: #007700">..])<br />&nbsp;&nbsp;&nbsp;&nbsp;...<br />&nbsp;&nbsp;&nbsp;&nbsp;...<br />&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span>;<br /></span>
</code>1    </div>                  
                  
                  
    <div id="tab-example-code" class="tab-pane fade in" >
        <br><br>
        <div class="non-printable">
            In this is example an array is specified and passed to the report engine through the datasource array() method            <br><br>
            <a target="_blank" class="btn btn-success" id="run-example" href="example.array-report.php">Run Demo</a>

        </div>
        <br><br>
<code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rows&nbsp;</span><span style="color: #007700">=&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;</span><span style="color: #DD0000">"id"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"1"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"first_name"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"Nancy"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"last_name"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"Davolio"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"date_of_birth"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"1968-12-08"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"country"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"USA"&nbsp;</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;</span><span style="color: #DD0000">"id"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"2"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"first_name"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"Andrew"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"last_name"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"Fuller"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"date_of_birth"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"1952-02-19"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"country"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"USA"&nbsp;</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;....<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\</span><span style="color: #0000BB">Reportico</span><span style="color: #007700">\</span><span style="color: #0000BB">Engine</span><span style="color: #007700">\</span><span style="color: #0000BB">Builder</span><span style="color: #007700">::</span><span style="color: #0000BB">build</span><span style="color: #007700">()<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">datasource</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">array</span><span style="color: #007700">(</span><span style="color: #0000BB">$rows</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">title</span><span style="color: #007700">(</span><span style="color: #DD0000">"Employee&nbsp;List"</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">?&gt;<br /></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</code>    </div>
    </div>
</div>
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"-->
    <!-- Our Custom CSS -->

</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="documentationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Results</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="documentationModalContent" style="padding: 0px">
	<iframe id="documentation-iframe" src="">
	</iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    $("#run-example").click(function(){
    var url = $(this).prop("href"); 
    $.ajax({
        type: "GET",
        url: url,
        success: function(res) {
            
            // get the ajax response data
            // update modal content
            // show modal
            $('#documentationModalContent').html(res);
		//res = "<b>hello</b>goodbye";
            $('#documentationModal').modal('show');
            
        },
        error:function(request, status, error) {
            console.log("ajax call went wrong:" + request.responseText);
        }
    });
    return false;
});
</script>

</body>
</html>