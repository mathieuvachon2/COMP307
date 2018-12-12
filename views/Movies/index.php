<div class = "container-fluid">
    <div class = "row py-5">
        <div class="col">
            <h1 style="text-align: center">Movies</h1>
        </div>
    </div>

    <div class = "row pt-5">
        <div class="col-sm-6">
        <!-- Search by developer-->
    <div class = "row">
        <div class="col">
            <p>Browse Movies depending on the director</p>
        </div>
    </div>

    <div class = "row">
        <div class="col">
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Director name...">
                <button class="btn btn-success" id="searchDev" onclick="searchByDeveloper()" type="submit">Search</button>
            </form>
        </div>
    </div>
    <!-- Search by tags-->

    <!-- For desktop -->
    <div class="scrollDesktop">

        <div class = "row pt-5">
            <div class="col">
                <p>Browse movies depending on the following categories (Ctrl + Shift to select multiple)</p>
            </div>
        </div>
        <div class = "row w-50">
            <div class="col">
                <select multiple class="form-control" id="sel" name="sellist">
                    <option value="1">Horror</option>
                    <option value="2">Comedy</option>
                    <option value="3">Adventure</option>
                    <option value="4">Thriller</option>
                    <option value="5">Action</option>
                    <option value="6">Sports</option>
                    <option value="7">Mystery</option>
                    <option value="8">Drama</option>
                    <option value="9">Crime</option>
                    <option value="10">Animation</option>


                </select>
            </div>
        </div>
        <div class = "row w-50">
            <div class="col">
                <form class="form-inline" action="/action_page.php">
                    <button class="btn btn-success" id="searchTags" onclick="searchByTags()" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <!-- For mobile -->
    <div class="scrollMobile">

        <div class = "row pt-5">
            <div class="col">
                <p>Browse movies depending on the following categories</p>
            </div>
        </div>
        <div class = "row w-50">
            <div class="col">
                <div class="multiselect">
                    <div class="selectBox" onclick="showCheckboxes()">
                        <select>
                            <option>Select an option</option>
                        </select>
                        <div class="overSelect"></div>
                    </div>
                    <div id="checkboxes">
                        <label for="Horror">
                            <input type="checkbox" id="Horror" value="Horror" name="type"/>Horror</label>
                        <label for="Comedy">
                            <input type="checkbox" id="Comedy" value="Comedy" name="type"/>Comedy</label>
                        <label for="Adventure">
                            <input type="checkbox" id="Adventure" value="Adventure" name="type"/>Adventure</label>
                        <label for="Thriller">
                            <input type="checkbox" id="Thriller" value="Thriller" name="type"/>Thriller</label>
                        <label for="Action">
                            <input type="checkbox" id="Action" value="Action" name="type"/>Action</label>
                        <label for="Sports">
                            <input type="checkbox" id="Sports" value="Sports" name="type"/>Sports</label>
                        <label for="Mystery">
                            <input type="checkbox" id="Mystery" value="Mystery" name="type"/>Mystery</label>
                        <label for="Drama">
                            <input type="checkbox" id="Drama" value="Drama" name="type"/>Drama</label>
                        <label for="Crime">
                            <input type="checkbox" id="Crime" value="Crime" name="type"/>Crime</label>
                        <label for="Animation">
                            <input type="checkbox" id="Animation" value="Animation" name="type"/>Animation</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        <!-- This is where you want the games to pop up by developer or by genres -->
        <div class="col-sm-6">
            <!-- By developer -->
            <div class="devDisplay">
                <div class="row pt-3" id="devName">
                    <h2>Quentin Tarantino (normally only after Ajax call)</h2>
                </div>
                <div class="gameName">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <h3><a href="views/1"> Jackie Brown </a></h3>
                        </div>
                    </div>
                </div>
                <div class="gameImage">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <img src="https://upload.wikimedia.org/wikipedia/en/8/89/Jackie_Brown_%281997%29.png">
                        </div>
                    </div>
                </div>

                <div class="gameName">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <h3><a href="views/1"> Jackie Brown </a></h3>
                        </div>
                    </div>
                </div>
                <div class="gameImage">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <img src="https://upload.wikimedia.org/wikipedia/en/8/89/Jackie_Brown_%281997%29.png">
                        </div>
                    </div>
                </div>
            </div>

            <!-- By genres -->
            <div class="genreDisplay">
                <div class="row pt-3" id="genreName">
                    <div class="col-5"></div>
                    <div class="col-2">
                        <h2>(by genre)</h2>
                    </div>
                    <div class="col-5"></div>
                </div>
                <div class="gameName">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <h3><a href="views/1"> Jackie Brown </a></h3>
                        </div>
                    </div>
                </div>
                <div class="gameImage">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <img src="https://upload.wikimedia.org/wikipedia/en/8/89/Jackie_Brown_%281997%29.png">
                        </div>
                    </div>
                </div>

                <div class="gameName">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <h3><a href="views/1"> Jackie Brown </a></h3>
                        </div>
                    </div>
                </div>
                <div class="gameImage">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <img src="https://upload.wikimedia.org/wikipedia/en/8/89/Jackie_Brown_%281997%29.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>