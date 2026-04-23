(() => {
  const form = document.getElementById("carFilterForm");
  const grid = document.getElementById("carGrid");
  const meta = document.getElementById("resultsMeta");
  const resetBtn = document.getElementById("resetBtn");

  if (!form || !grid) return;

  const cards = Array.from(grid.querySelectorAll(".card"));

  const getVal = (id) => (document.getElementById(id)?.value || "").trim();

  const toNum = (v) => {
    const s = String(v ?? "").trim();
    if (s === "") return null;
    const n = Number(s);
    return Number.isFinite(n) ? n : null;
  };

  const matchesText = (expected, actual) => {
    if (!expected) return true;
    return String(actual || "").toLowerCase() === expected.toLowerCase();
  };

  const applyFilters = () => {
    const make = getVal("make");
    const model = getVal("model");
    const state = getVal("state");
    const city = getVal("city");
    const type = getVal("type");
    const fuel = getVal("fuel");

    const yearFrom = toNum(getVal("yearFrom"));
    const yearTo = toNum(getVal("yearTo"));
    const priceFrom = toNum(getVal("priceFrom"));
    const priceTo = toNum(getVal("priceTo"));

    let visible = 0;

    cards.forEach((card) => {
      const d = card.dataset;

      const year = toNum(d.year);
      const price = toNum(d.price);

      const ok =
        matchesText(make, d.make) &&
        matchesText(model, d.model) &&
        matchesText(state, d.state) &&
        matchesText(city, d.city) &&
        matchesText(type, d.type) &&
        matchesText(fuel, d.fuel) &&
        (yearFrom == null || (year != null && year >= yearFrom)) &&
        (yearTo == null || (year != null && year <= yearTo)) &&
        (priceFrom == null || (price != null && price >= priceFrom)) &&
        (priceTo == null || (price != null && price <= priceTo));

      card.style.display = ok ? "" : "none";
      if (ok) visible += 1;
    });

    if (meta) meta.textContent = `${visible} car${visible === 1 ? "" : "s"} found`;
  };

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    applyFilters();
  });

  resetBtn?.addEventListener("click", () => {
    form.reset();
    applyFilters();
  });

  grid.addEventListener("click", (e) => {
    const btn = e.target.closest(".fav-btn");
    if (!btn) return;

    const pressed = btn.getAttribute("aria-pressed") === "true";
    btn.setAttribute("aria-pressed", String(!pressed));
    btn.setAttribute(
      "aria-label",
      !pressed ? "Remove from favorites" : "Add to favorites"
    );
  });

  applyFilters();
})();
