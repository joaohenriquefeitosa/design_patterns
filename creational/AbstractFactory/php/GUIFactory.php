<?php


// Abstract Factory
interface GUIFactory
{
    public function createButton(): Button;
    public function createCheckBox(): Checkbox;
}


// Concrete Factory
class WindowsFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new WindowsButton();
    }

    public function createCheckBox(): Checkbox
    {
        return new WindowsCheckbox();
    }
}


// Concrete Factory
class MacFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckBox(): Checkbox
    {
        return new MacCheckbox();
    }
}


// Abstract Product
interface Button
{
    public function paint(): string;
}


// Concrete Product
class WindowsButton implements Button
{
    public function paint(): string
    {
        return "Rendering a button in Windows Style.";
    }
}


// Concrete Product
class MacButton implements Button
{
    public function paint(): string
    {
        return "Rendering a button in Mac Style.";
    }
}


// Abstract Product
interface Checkbox
{
    public function paint(): string;
}


// Concrete Product
class WindowsCheckbox implements Checkbox
{
    public function paint(): string
    {
        return "Rendering a checkbox in Windows Style.";
    }
}


// Concrete Product
class MacCheckbox implements Checkbox
{
    public function paint(): string
    {
        return "Rendering a checkbox in Mac Style.";
    }
}


// Client Code
function renderUI(GUIFactory $factory)
{
    $button = $factory->createButton();
    $checkbox = $factory->createCheckBox();

    echo $button->paint() . PHP_EOL;
    echo $checkbox->paint() . PHP_EOL;
}

$operationalSystem = 'Mac'; // or 'Windows'
$factory = null;

if($operationalSystem === 'Windows') {
    $factory = new WindowsFactory();
} else if($operationalSystem === 'Mac') {
    $factory = new MacFactory();
}

renderUI($factory);