import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class CalculatorController {
    private CalculatorView theView;
    private CalculatorModel theModel;

    public CalculatorController(CalculatorView theView, CalculatorModel theModel){
        this.theView = theView;
        this.theModel = theModel;
        this.theView.addCalculateListener(new CalculateListener());
    }

    class  CalculateListener implements ActionListener{
        public void actionPerformed(ActionEvent e){
            int num1, num2 = 0;

            try{
                num1 = theView.getFirstNumber();
                num2 = theView.getSecondNumber();

                theModel.addTwoNumber(num1,num2);
                theView.setCalcSolution(theModel.getCalculationValue());
            }catch (NumberFormatException ex){
                System.out.println(ex);
                theView.displayErrorMessage("You need to enter 2 Integers");
            }
        }
    }
}
