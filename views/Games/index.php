<?php $script = '<script>
        // Put this in own JavaScript file later
        var expanded = false;

        function showCheckboxes() {
            var checkboxes = document.getElementById("checkboxes");
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
            } else {
                checkboxes.style.display = "none";
                expanded = false;
            }
        }
    </script>';?>
    <div class = "container-fluid">
        <div class = "row py-5">
            <div class="col">
                <h1 style="text-align: center">Video Games</h1>
            </div>
        </div>

        <!-- Search by developer-->
        <div class = "row pt-5">
            <div class="col">
                <p>Browse games depending on the developer</p>
            </div>
        </div>

        <div class = "row">
            <div class="col">
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Developer name...">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <!-- Search by tags-->
        <div class = "row pt-5">
            <div class="col">
                <p>Browse games depending on the following categories (Ctrl + Shift to select multiple)</p>
            </div>
        </div>

        <!-- For desktop -->
        <div class="scrollDesktop">
        <div class = "row w-50">
            <div class="col">
                <select multiple class="form-control" id="sel" name="sellist">
                    <option>RPG</option>
                    <option>RTS</option>
                    <option>Action</option>
                    <option>Horror</option>
                    <option>Indie</option>
                    <option>Adventure</option>
                    <option>Casual</option>
                    <option>Singleplayer</option>
                    <option>Multiplayer</option>
                </select>
            </div>
        </div>
        </div>

        <!-- For mobile -->
        <div class="scrollMobile">
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
                                <input type="checkbox" id="RPG" />RPG</label>
                            <label for="RTS">
                                <input type="checkbox" id="RTS" />RTS</label>
                            <label for="Action">
                                <input type="checkbox" id="Action" />Action</label>
                            <label for="Horror">
                                <input type="checkbox" id="Horror" />Horror</label>
                            <label for="Indie">
                                <input type="checkbox" id="Indie" />Indie</label>
                            <label for="Adventure">
                                <input type="checkbox" id="Adventure" />Adventure</label>
                            <label for="Casual">
                                <input type="checkbox" id="Casual" />Casual</label>
                            <label for="Singleplayer">
                                <input type="checkbox" id="Singleplayer" />Singleplayer</label>
                            <label for="Multiplayer">
                                <input type="checkbox" id="Multiplayer" />Multiplayer</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </div>

</body>
</html>