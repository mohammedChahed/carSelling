    <section class="filters" aria-label="Search filters">
      <div class="container">
        <form 
            action="{{ $action }}"
            method="{{ $methode }}"
            id="carFilterForm" class="filter-bar">
          <div class="filter-row">
            <div class="field">
              <label for="make">Make</label>
              <select id="make" name="make">
                <option value="">Any</option>
                <option value="Lexus">Lexus</option>
                <option value="Range Rover">Range Rover</option>
                <option value="Toyota">Toyota</option>
                <option value="BMW">BMW</option>
              </select>
            </div>

            <div class="field">
              <label for="model">Model</label>
              <select id="model" name="model">
                <option value="">Any</option>
                <option value="RX200t">RX200t</option>
                <option value="Sport">Sport</option>
                <option value="Camry">Camry</option>
                <option value="X5">X5</option>
              </select>
            </div>

            <div class="field">
              <label for="state">State / Region</label>
              <select id="state" name="state">
                <option value="">Any</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New York">New York</option>
                <option value="California">California</option>
                <option value="Texas">Texas</option>
              </select>
            </div>

            <div class="field">
              <label for="city">City</label>
              <select id="city" name="city">
                <option value="">Any</option>
                <option value="Newark">Newark</option>
                <option value="Jersey City">Jersey City</option>
                <option value="Los Angeles">Los Angeles</option>
                <option value="Austin">Austin</option>
              </select>
            </div>

            <div class="field">
              <label for="type">Type</label>
              <select id="type" name="type">
                <option value="">Any</option>
                <option value="SUV">SUV</option>
                <option value="Sedan">Sedan</option>
                <option value="Coupe">Coupe</option>
              </select>
            </div>

            <div class="field">
              <label for="fuel">Fuel Type</label>
              <select id="fuel" name="fuel">
                <option value="">Any</option>
                <option value="Electric">Electric</option>
                <option value="Hybrid">Hybrid</option>
                <option value="Gasoline">Gasoline</option>
                <option value="Diesel">Diesel</option>
              </select>
            </div>
          </div>

          <div class="filter-row filter-row-compact">
            <div class="field">
              <label for="yearFrom">Year From</label>
              <input id="yearFrom" name="yearFrom" type="number" inputmode="numeric" placeholder="2015" min="1990" max="2099" />
            </div>

            <div class="field">
              <label for="yearTo">Year To</label>
              <input id="yearTo" name="yearTo" type="number" inputmode="numeric" placeholder="2025" min="1990" max="2099" />
            </div>

            <div class="field">
              <label for="priceFrom">Price From</label>
              <input id="priceFrom" name="priceFrom" type="number" inputmode="numeric" placeholder="15000" min="0" />
            </div>

            <div class="field">
              <label for="priceTo">Price To</label>
              <input id="priceTo" name="priceTo" type="number" inputmode="numeric" placeholder="40000" min="0" />
            </div>

            <div class="filter-actions">
              <button id="resetBtn" class="btn btn-soft" type="button">Reset</button>
              <button class="btn btn-primary btn-wide" type="submit">Search</button>
            </div>
          </div>
        </form>

        <p id="resultsMeta" class="results-meta" aria-live="polite"></p>
      </div>
    </section>