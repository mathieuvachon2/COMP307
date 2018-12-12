    <div class = "container-fluid">
        <div class = "row py-5">
            <div class="col">
                <h1 style="text-align: center">Video Games</h1>
            </div>
        </div>

        
        <div class = "row pt-5">
        <div class="col-sm-6">   
        <!-- Search by developer-->
        <div class = "row">
            <div class="col">
                <p>Browse games depending on the developer</p>
            </div>
        </div>

        <div class = "row">
            <div class="col">
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Developer name...">
                    <button class="btn btn-success" id="searchDev" onclick="searchByDeveloper()" type="submit">Search</button>
                </form>
            </div>
        </div>
        
        <!-- Search by tags-->

        <!-- For desktop -->
        <div class="scrollDesktop">
        <div class = "row pt-5">
            <div class="col">
                <p>Browse games depending on the following categories (Ctrl + Shift to select multiple)</p>
            </div>
        </div>

        
        <div class = "row w-50">
            <div class="col">
                <select multiple class="form-control" id="sel" name="sellist">
                    <option value='1'>RPG</option>
                    <option value = '2'>RTS</option>
                    <option value = '3'>Action</option>
                    <option value = '4'>Horror</option>
                    <option value = '5'>Indie</option>
                    <option value = '6'>Adventure</option>
                    <option value='7'>Casual</option>
                    <option value='8'>Singleplayer</option>
                    <option value='9'>Multiplayer</option>
                </select>
            </div>
        </div>
            <div class = "row w-50"> 
                <div class="col">
                    <form class="form-inline" action="/action_page.php">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- For mobile -->
        <div class="scrollMobile">
            <div class = "row pt-5">
                <div class="col">
                    <p>Browse games depending on the following categories</p>
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
                            <label for="RPG">
                                <input type="checkbox" id="RPG" value="RPG" name="type" />RPG</label>
                            <label for="RTS">
                                <input type="checkbox" id="RTS" value="RTS" name="type"/>RTS</label>
                            <label for="Action">
                                <input type="checkbox" id="Action" value="Action" name="type"/>Action</label>
                            <label for="Horror">
                                <input type="checkbox" id="Horror" value="Horror" name="type"/>Horror</label>
                            <label for="Indie">
                                <input type="checkbox" id="Indie" value="Indie" name="type"/>Indie</label>
                            <label for="Adventure">
                                <input type="checkbox" id="Adventure" value="Adventure" name="type"/>Adventure</label>
                            <label for="Casual">
                                <input type="checkbox" id="Casual" value="Casual" name="type"/>Casual</label>
                            <label for="Singleplayer">
                                <input type="checkbox" id="Singleplayer" value="Singleplayer" name="type"/>Singleplayer</label>
                            <label for="Multiplayer">
                                <input type="checkbox" id="Multiplayer" value="Multiplayer" name="type"/>Multiplayer</label>
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
                        <h2>Blizzard North (normally only after Ajax call)</h2>
                    </div>
                    <div class="gameName">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                        <h3><a href="views/1"> Diablo 1 </a></h3>
                        </div>
                    </div>
                    </div>
                    <div class="gameImage">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                        <img src="https://upload.wikimedia.org/wikipedia/en/d/d5/Diablo_II_Coverart.png">
                        </div>
                    </div>
                    </div>

                    <div class="gameName">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-10">
                                <h3><a href="views/1"> Diablo 2 </a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="gameImage">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-10">
                                <img src="https://upload.wikimedia.org/wikipedia/en/d/d5/Diablo_II_Coverart.png">
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
                                <h3><a href="views/1"> Diablo 1 </a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="gameImage">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-10">
                                <img src="https://upload.wikimedia.org/wikipedia/en/d/d5/Diablo_II_Coverart.png">
                            </div>
                        </div>
                    </div>

                    <div class="gameName">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-10">
                                <h3><a href="views/1"> Diablo 2 </a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="gameImage">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-10">
                                <img src="https://upload.wikimedia.org/wikipedia/en/d/d5/Diablo_II_Coverart.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>