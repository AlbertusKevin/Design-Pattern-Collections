public class CalculatorModel {
    private int calculationValue;

    public void addTwoNumber(int num1, int num2){
        calculationValue = num1 + num2;
    }

    public int getCalculationValue(){
        return calculationValue;
    }
}
