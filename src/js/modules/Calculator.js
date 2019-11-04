class Calculator {
  constructor() {
    // default values
    this.ordersCount = 20;
    this.avgCheck = 1800;
    this.income;
    this.cost = 600;
    this.totalCost;
    this.socialExpences = 2000;
    this.royalty = 3000;
    this.polygraphyExpences = 1000;
    this.expences;
    this.profit;

    // calculator form
    this.calculatorForm = document.getElementById("profit-calculator");
    
    if (this.calculatorForm) {
      // inputs
      // income
      this.ordersInput = this.calculatorForm.querySelector('#pc-orders__input');
      this.ordersRange = this.calculatorForm.querySelector('#pc-orders__range');
      this.avgCheckInput = this.calculatorForm.querySelector('#pc-avg-check__input');
      this.avgCheckRange = this.calculatorForm.querySelector('#pc-avg-check__range');
      this.incomeInput = this.calculatorForm.querySelector("#pc-income");
      // expences
      this.costInput = this.calculatorForm.querySelector('#pc-expences__cost');
      this.totalCostInput = this.calculatorForm.querySelector('#pc-expences__total-cost');
      this.socialExpencesInput = this.calculatorForm.querySelector('#pc-expences__social');
      this.royaltyInput = this.calculatorForm.querySelector('#pc-expences__royalty');
      this.polygraphyExpencesInput = this.calculatorForm.querySelector('#pc-expences__polygraphy');
      this.expencesInput = this.calculatorForm.querySelector('#pc-expences');
      // profit
      this.profitInput = this.calculatorForm.querySelector('#pc-profit');

      // adding event listers
      this.initEventListeners();

      this.calcProfit();
      this.update();
    }
  }

  initEventListeners() {
    this.ordersRange.addEventListener('input', (evt) => {
      this.ordersCount = parseInt(this.ordersRange.value);
      this.calcProfit();
      this.update();
    });

    this.avgCheckRange.addEventListener('input', (evt) => {
      this.avgCheck = parseInt(this.avgCheckRange.value);
      this.calcProfit();
      this.update();
    })
  }

  calcProfit() {
    // income
    this.income = this.ordersCount * this.avgCheck;

    // expences
    this.totalCost = this.ordersCount * this.cost;
    this.expences = this.totalCost + parseInt(this.socialExpences) + parseInt(this.royalty) + parseInt(this.polygraphyExpences);

    // profit
    this.profit = this.income - parseInt(this.expences);
  }

  update() {
    // income fields
    this.ordersInput.value = this.ordersCount;
    this.avgCheckInput.value = this.avgCheck;
    this.incomeInput.value = this.income + ' ₽';

    // expences fields
    this.costInput.value = this.cost;
    this.totalCostInput.value = this.totalCost;
    this.socialExpencesInput.value = this.socialExpences;
    this.royaltyInput.value = this.royalty;
    this.polygraphyExpencesInput.value = this.polygraphyExpences;
    this.expencesInput.value = this.expences + ' ₽';

    // profit fields
    this.profitInput.value = this.profit + ' ₽';
  }
}

export default Calculator;
