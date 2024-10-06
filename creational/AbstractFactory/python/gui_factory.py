from abc import ABC, abstractmethod

# Abstract Factory
class GUIFactory(ABC):
    
    @abstractmethod
    def create_button(self) -> 'Button':
        pass

    @abstractmethod
    def create_checkbox(self) -> 'Checkbox':
        pass


# Concrete Factory
class WindowsFactory(GUIFactory):
    
    def create_button(self) -> 'Button':
        return WindowsButton()
    
    def create_checkbox(self) -> 'Checkbox':
        return WindowsCheckbox()


# Concrete Factory
class MacFactory(GUIFactory):

    def create_button(self) -> 'Button':
        return MacButton()

    def create_checkbox(self) -> 'Checkbox':
        return MacCheckbox()


# Abstract Product
class Button(ABC):

    @abstractmethod
    def paint(self) -> str:
        pass


# Concrete Product
class WindowsButton(Button):

    def paint(sefl) -> str:
        return "Rendering a button in Windows Style"


# Concrete Product
class MacButton(Button):

    def paint(sefl) -> str:
        return "Rendering a button in Mac Style"



# Abstract Product
class Checkbox(ABC):

    @abstractmethod
    def paint(self) -> str:
        pass


# Concrete Product
class WindowsCheckbox(Checkbox):

    def paint(sefl) -> str:
        return "Rendering a checkbox in Windows Style"


# Concrete Product
class MacCheckbox(Checkbox):

    def paint(sefl) -> str:
        return "Rendering a checkbox in Mac Style"


# Client Code
def render_ui(factory: GUIFactory):
    button = factory.create_button()
    checkbox = factory.create_checkbox()

    print(button.paint())
    print(checkbox.paint())


operating_system = 'Windows' # or 'Mac'
factory = None

if operating_system == 'Windows':
    factory = WindowsFactory()
elif operating_system == 'Mac':
    factory = MacFactory()

if factory:
    render_ui(factory)