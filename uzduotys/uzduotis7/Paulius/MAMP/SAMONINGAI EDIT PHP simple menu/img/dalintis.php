<div class="section" id="section2">
    <div class="intro fulscreenbug" id="background2">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <h1>dalintis</h1>
                    <form method="post" action="" class="valida">

                        <!---                       Pavadinimas ir data     -->

                        <label id="labelfirst" for="field-1">Pavadinimas: (būtinas)</label>
                        <div class="form-group">
                            <input type="text" name="field-1" id="field-1" required="true" class="form-control" />
                        </div>

                        <label for="field-1-2">Renginio data, privaloma vesti</label>
                        <div class="form-group">
                            <input type="text" name="field-1-2" id="field-1-2" required="true" filter="date" class="form-control" data-invalid="Data privalo būti įrašyta tinkamu formatu pvz: 2015-12-01" />
                        </div>

                        <!--                        Pasirinkti miesta       -->

                        <label for="field-2">Pasirinkite miesta</label>
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

                        <label for="field-3">Renginio tipas</label>
                        <div class="form-group">
                            <select name="field-1" required="true" class="form-control">
    <option value=""></option>
    <option value="val-1">Stovykla</option>
    <option value="val-2">Paskaita</option>
    <option value="val-3">Meditacijos praktika ir meditacija</option>
    <option value="val-4">Mokymai</option>
    </select>
                        </div>

                        <!--                    Checkbox ir aprasymas-->
                        <div class="checkbox">
                            <input type="checkbox" name="field-3" id="field-3" value="y" />
                            <label for="field-3">Būtina registracija</label>
                        </div>

                        <label for="field-4">Renginio aprašymas</label>
                        <div class="form-group">
                            <textarea name="field-4" id="field-4" required="true" class="aprasymasbox"></textarea>
                        </div>

                        <!--				Mygtukai        -->




                        <p>
                            <input type="submit" name="sub-1" value="Pateikti duomenis" class="formosmygtukas" />
                            <input type="reset" name="res-1" id="res-1" value="Ištrinti duomenis" class="formosmygtukas" />

                        </p>



                    </form>
                </div>
                
                <div class="col-md-cs3">ss</div>

            </div>
        </div>
    </div>
</div>
