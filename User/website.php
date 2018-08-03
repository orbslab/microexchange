<?php
	include 'header.php';
?>

    <!-------- Website -------->
    <div class="website">
        <div class="container">
            <div class="web-content">
                <!-- <div class="dropdown">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                        Daily Hits Limit
                    </button>
                    <div class="dropdown-menu">
                        <fieldset class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    Exact
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Random
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Add New Website URL</label>
                            <input class="form-control" type="text" placeholder="Enter website URL" id="inputLarge">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Add JavaScript Macro</label>
                            <input class="form-control" type="text" placeholder="Enter Macro Code" id="inputLarge">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Daily Hits Limit</label>
                            <div class="slidecontainer">
                                <input class="slider" type="range" min="100" max="10000" step="100" value="5000" id="range"><span class="slider_value" id="limit"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Add to Traffic Link</label>
                            <div class="switch-field">
                                <input type="radio" id="switch_3_left" name="switch_3" value="yes" checked/>
                                <label for="switch_3_left">YES</label>
                                <input type="radio" id="switch_3_center" name="switch_3" value="maybe" />
                                <label for="switch_3_center">NO</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Duration in Second</label>
                            <input class="form-control" type="text" placeholder="Ex: 180" id="inputSmall">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Number of Visits Per Hour</label>
                            <input class="form-control" type="text" placeholder="Number of Visits Per Hour" id="inputSmall">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Re Visit</label>
                            <input class="form-control" type="text" placeholder="Number of Re Visit" id="inputSmall">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="unique-visits1">Unique Visits</label>
                            <select class="form-control" id="unique-visits1">
                                <option>Once In Every 5 Hours</option>
                                <option>Once In Every 24 Hours</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="submit">
                    <button type="button" class="btn" data-toggle="buttons">Submit</button>
                </div>
            </div>
        </div>
    </div>

<?php
	include 'footer.php';
?>