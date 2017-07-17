<div class="section" id="section2">
    <div class="intro fulscreenbug" id="background2">
        <div class="container">
            <div class="row">
                <h1>dalintis</h1>
                <div class="col-xs-6">

                    <form method="get" action="mailer.php" class="valida">

                        <!---                       Pavadinimas ir data     -->

                        <label id="labelfirst" for="field-1">Pavadinimas</label>
                        <div class="form-group">
                            <input type="text" name="field-1" id="field-1" required="true" maxlength="35" class="form-control" />
                        </div>

                        <label for="field-1-2">Renginio data</label>
                        <div class="form-group">
                            <input type="text" name="field-1-2" id="field-1-2" required="true" maxlength="10" filter="date" class="form-control" data-invalid="Netinkamas datos formatas" />
                        </div>

                        <label for="field-1-3">Organizatorių email</label>
                        <div class="form-group">
                            <input type="text" name="field-1-3" id="field-1-3" required="true" maxlength="35" filter="email" class="form-control" data-invalid="neteisingas el paštas" />
                        </div>

                        <!--                        Pasirinkti miesta       -->

                        <label for="field-2">Artimiausias Miestas</label>
                        <div class="form-group">
                            <select name="field-2" id="field-2" required="true" class="form-control">
    <option value=""></option>
    <option value="val-1">Kaunas</option>
    <option value="val-2">Vilnius</option>
    <option value="val-3">Rekyva</option>
    <option value="val-4">Krekenava</option>
    <option value="val-5">Uzmiestis</option>
    </select>
                        </div>

                        <label for="field-2-1">Tipas</label>
                        <div class="form-group">
                            <select name="field-2-1" id="field-2-1" required="true" class="form-control">
    <option value=""></option>
    <option value="val-1">Stovykla</option>
    <option value="val-2">Paskaita</option>
    <option value="val-3">Meditacijos praktika ir meditacija</option>
    <option value="val-4">Mokymai</option>
    </select>
                        </div>

                        <!--                    Checkbox ir aprasymas-->
                        <div class="checkbox">
                            <input type="checkbox" name="field-5" id="field-5" value="y" />
                            <label for="field-3">Būtina registracija</label>
                        </div>
                </div>
                <div class="col-xs-6 box-pozicija">
                    <label for="field-3">Renginio aprašymas</label>
                    <div class="form-group">
                        <textarea name="field-3" id="field-3" required="true" maxlength="500" class="aprasymasbox"></textarea>
                    </div>

                    <!--				Mygtukai        -->

                    <input type="submit" name="sub-1" value="Pateikti duomenis" class="btn btn-2" />
                    <input type="reset" name="res-1" id="res-1" value="Ištrinti duomenis" class="btn btn-2" />



                </div>
                </form>
            </div>
        </div>
    </div>
</div>