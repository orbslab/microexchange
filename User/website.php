<?php
	include 'header.php';
?>

    <!-------- Website -------->
    <div class="website">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Add new website</h5>
                    <p>Website Link/URL</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" placeholder="Enter website link/URL" id="inputLarge">
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Add Macro or JavaScript Macro</h5>
                    <p>Macro or JavaScript Macro Link/URL</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" placeholder="Enter Macro link/URL" id="inputLarge">
                    </div>
                </div>
            </div>
            <div class="web-content">
                <div class="dropdown">
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
                </div>
                <div class="row m-t-20">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="duration1">Duration</label>
                            <select class="form-control" id="duration1">
                                <option>1s</option>
                                <option>5s</option>
                                <option>10s</option>
                                <option>20s</option>
                                <option>30s</option>
                                <option>40s</option>
                                <option>50s</option>
                                <option>60s</option>
                            </select>
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
                            <label for="re-visits1">Re-Visits</label>
                            <select class="form-control" id="re-visits1">
                                <option>1s</option>
                                <option>5s</option>
                                <option>10s</option>
                                <option>20s</option>
                                <option>30s</option>
                                <option>40s</option>
                                <option>50s</option>
                                <option>60s</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="unique-visits1">Unique-Visits</label>
                            <select class="form-control" id="unique-visits1">
                                <option>Every Hour</option>
                                <option>Every 2 Hours</option>
                                <option>Every 5 Hours</option>
                                <option>Every 10 Hours</option>
                                <option>Every 24 Hours</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="row form-group traffic-link">
                            <div class="col-md-8 col-sm-12">
                                <div class="float-left">
                                    <label class="control-label text-left">Add to Traffic Link</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="float-right">
                                    <button type="button" class="btn">No</button>
                                </div>
                                <div class="float-right mr-1">
                                    <button type="button" class="btn">Yes</button>
                                </div>
                            </div>
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