package kalkulator2;
import java.util.ArrayList;
import java.util.Stack;
import java.util.Arrays;
import java.util.Scanner;

public class Kalkulator2 {
    public double evaluateExpression(String expression) {
        ArrayList<String> tokens = new ArrayList<>(Arrays.asList(expression.split("\\s+")));
        ArrayList<String> operators = new ArrayList<>(Arrays.asList("+", "-", "*", "/", "%"));
        Stack<Double> operands = new Stack<>();
        Stack<String> operatorStack = new Stack<>();
        
        for (int i = 0; i < tokens.size(); i++) {
            String token = tokens.get(i);
            if (operators.contains(token)) {
                while (!operatorStack.empty() && hasPrecedence(operatorStack.peek(), token)) {
                    applyOperation(operands, operatorStack.pop());
                }
                operatorStack.push(token);
            } else {
                operands.push(Double.parseDouble(token));
            }
        }
        while (!operatorStack.empty()) {
            applyOperation(operands, operatorStack.pop());
        }
        return operands.pop();
    }
    
private boolean hasPrecedence(String operator1, String operator2) 
    {
        if (operator1.equals("*") || operator1.equals("/") || operator2.equals("%")) {
            return true;
        }
        else if (operator2.equals("+") || operator2.equals("-")) {
            return true;
        }
        return false;
    }

    private void applyOperation(Stack<Double> operands, String operator) {
        double operand3 = operands.pop();
        double operand2 = operands.pop();
        double operand1 = operands.pop();
        double result = 0;

        switch (operator) {
            case "+":
                result = operand1 + operand2;
                break;
            case "-":
                result = operand1 - operand2;
                break;
            case "*":
                result = operand1 * operand2;
                break;
            case "/":
                result = operand1 / operand2;
                break;
            case "%":
                result = operand1 % operand2;
                break;
        }
        operands.push(result);
    }

public static void main(String[] args) {
        Kalkulator2 hitung = new Kalkulator2();
        Scanner scanner = new Scanner(System.in);
        boolean continueCalculating = true;
        double num = 0;

        while (continueCalculating) {
            String input;
            if (num == 0) {
                System.out.println("---Program Menghitung Kalkulator---");
                System.out.print("Masukkan angka (ex: 10 - 2 * 3): ");
                input = scanner.nextLine();
            } else {
                System.out.print("Masukkan operator dan angkanya :" + num + " ");
                input = num + " " + scanner.nextLine();
            }

            double result = hitung.evaluateExpression(input);

            System.out.println("Hasil: " + result);
            System.out.print("Apakah ingin melanjutkan perhitungan(y/n)? ");
            String answer = scanner.nextLine();

            if (answer.equalsIgnoreCase("y")) {
                num = result;
            } else {
                continueCalculating = false;
            }
        }
        System.out.println("Sudah selesai.");
    }
}
