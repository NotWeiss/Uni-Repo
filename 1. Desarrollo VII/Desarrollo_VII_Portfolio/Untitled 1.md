
<p class = "absolute-middle">
<center>
<h1>CODING CONVENTIONS GUIDE</h1>
September 11, 2024.<br>
Version: Pre-Release [1.0]
</center>
</p>

<div style = "page-break-after: always;"></div>

<p class = "left-middle">
Copyright Information.<br>
© 2024, [INSERT NAME]. Creative Commons Attribution.<br>
Panamá, Panamá.<br><br>
This work is licensed under a Creative Commons Attribution-ShareAlike 4.0 International License. You are free to copy, redistribute, and adapt this document as needed, provided that appropriate credit is given to the authors.<br><br>
Any modified versions of this document must be distributed under the same license as the original work. Restrictions on the use of this document are not permitted; the aim is to keep this work as accessible as possible to help others.<br><br>
DISCLAIMER<br>
The authors and [INSERT NAME] make no warranties regarding the accuracy or completeness of the information contained in this document and are not responsible for any consequences arising from its use.<br></p>
<p>
FULL LICENSE<br>
For the full terms of the license, please visit <a href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License.</a>
</p>

<div style = "page-break-after: always;"></div>

1. **General Guidelines**
2. **Naming Conventions**
3. **Indentation and Whitespace**
4. **Brace Style**
5. **Error Handling**
6. **Commenting and Documentation**
7. **Code Structure and Modularity**
8. **Error and Log Handling**
9. **Unit Testing**
10. **Code Reviews and Version Control**
11. **Security Considerations**
12. **Performance Considerations**
13. **Refactoring and Clean Code**
14. **Language-Specific Considerations**
15. **Tooling and Automation**
16. **Conclusion**

<div style = "page-break-after: always;"></div>

## General Guidelines

##### DRY Principle.
Don't Repeat Yourself (DRY) states that "Every piece of knowledge must have a single, unambiguous, authoritative representation within a system". In other words, there'll be times where you use the same block of code in different parts of your work, so make it simpler and cleaner, transform that block of code into a method and reuse it across your code.

##### KISS Principle.
Keep It Simple, Stupid (KISS) is a design principle which states that systems should be as simple as possible. Whenever possible, all kind of unnecessary over-complexity should be completely avoided, keep simple things as simple as they are and let them be easy to understand, maintain and scale.

##### Separation of Responsibilities.
Make sure to keep the directory organized, in every project there'll be different responsibilities/layers that must be covered and all code related to them should be be organized and completely separated from the other responsibilities. 
If there's a specific functionality that'll be needed in more than one layer, they'll be tagged as ***CORE FUNCTIONALITY*** and be localized in a designated directory to make it easier to access.

##### Valuable Comments.
Keep comments relevant, focus on explaining ***WHY*** a decision was made, specially when it's complex and it isn't intuitive. If any modifications are made to a global variable, make sure to clarify that in a comment, document external dependencies and mark empty code blocks.
Make sure to keep a consistent style of comments, more of that over here [LINK].

<div style = "page-break-after: always;"></div>

## Naming Conventions

#### General Rules

**Do's:**
- Use names that clearly describe the purpose of variables, functions or classes.
- Use constants for fixed values, never use magic numbers.
- Make sure to use singulars or plurals correctly.
- Start with letter, never with numbers or special characters. **There could be exceptions**.

**Don'ts:**
- Avoid using Single-Letter names (a, b, i, x, y, m, n). 
- **DO NOT** use abbreviations for naming.
- **DO NOT** include data types in names.
- Don't use ambiguous terms for names.
- Don't use confusing or similar names. 

Make sure to read the specific rules since they have exceptions or they overwrite the general ones.

#### Variables.
Variable names should follow the *camelCase* style. They must be short but also an auto-descriptive mnemonic which makes it easier to remember.

**Do**
```
name;
directionalSpeed;
```
**Don't**
```
Surname;
VELOCITY;
DuMbMeThOd;
HelpMe;
```

#### Constants.
Class constants enjoy kind of a special treatment, their name should be completely in capital letters and in case they have a composed name, use underscores ("\_") to separate each letter.

**Do**
```
GRAVITY = 9.81;
UNIX_CREATION = 1971;
```
**Don't**
```
magnitude = 25;
Name = "Danger Man";
x = 267;
```

#### Booleans
For Booleans, you must use one of the following prefixes: is, has or should; before what you want to call it.

**Do**
```
isActive;
hasPermission;
shouldUpdate;
```
**Don't**
```
couldJump;
canUpdate;
WantFood;
ISNTactive;
```

---

#### Methods/Functions.
For Methods/Functions names, they must follow a **verb-noun** or **verb** naming pattern. They must follow the *camelCase* style with the first letter lowercase. Also, if its hard to decide which verb to use, you can always use "do" as long as you continue the name with something else.

**Do**
```
doHash(){}
updateView(){}
castFireball(){}
```
**Don't**
```
DoDrop(){}
help(){}
HARMSOMEONE(){}
```

#### Classes.
Unlike the others, Classes follow the *PascalCase* style when naming them. The first letter of each word used for naming them must be capitalized. Also, make sure to keep the names as short as possible by using nouns and avoid acronyms.

**Do**
```
Class Spellcaster{}
Class OrderManager{}
```

**Don't**
```
Class openMenu{}
Class SNOWMAN{}
Class movement{}
```

#### Namespaces/Packages.
A structure for namespaces must be defined and it's naming will follow the *PascalCase* style as well. In general, namespaces are usually named following a rule like this: 
```
CompanyName.ProjectName.Feature.Design
```
In our case, the naming structure will be announced before the development stage of the project. 

<div style = "page-break-after: always;"></div>

## Indentation and Whitespaces
#### Tabs and Text Wrapping.
**DO NOT** use spaces, use tabs (in our case, tabs are equal to 4 spaces). In case your code line is too large and you need to wrap it to the next line, make sure there'll be no more code in that same indentation; If there's or there'll be code in that indentation, first **DO NOT** move the subsequent code, second just add another tabulation to your wrapped code line. Finally, always wrap your text before an operator or after a coma (",").

**Do**
```
if ((isHungry && isThirsty) 
		|| (isAnxious))
	eatSandwich();

----------------------------------------

theList = [
	1, 2, 3,
	4, 5, 6,
	7, 8, 9
];
```
**Don't**
```
if (isScared ||
 isExcited)
 scream();

----------------------------------------

theThing = [
 1, 2, 3
 , 4, 5, 6
 , 7, 8, 9
];
```
Finally, unless you are using any kind of *Ternary Operator*, **DO NOT** write the complete statement in one line of code.

#### Line Length.
Let's keep it simple over here, every line of code must be of a maximum length of 72 characters. That way, it should make the code a lot more readable in a lot of different text editors or IDEs even when the window only uses half of the screen.

---

#### Separation Lines and Regions.
Many text editors support the "#Region" and "End Region" operator regardless of the language, make sure to look into that so you can make cleaner separation on your code. Also, after each method and \#Region add a separation line like this:
```
/*----------------*/ // Make sure to extend it up to the maximum length (72) characters.
```

#### Whitespace in Expressions and Statements.
Avoid adding whitespaces in weird places, use the following situations as guidelines:
- Immediately inside *Parentheses, Brackets or Braces*
	```
	// Correct Way:
	print(x, y);
	
	// Wrong Way
	print( x, y );
	```
- Immediately Before a comma, semicolon or colon
	```
	// Correct Way:
	print(x, y);
	
	// Wrong Way:
	print(x , y) ;
	```
- Immediately Before and After an operator
	```
	// Correct Way:
	result = 1 + 2;

	// Wrong Way:
	result=1+2;
	```
- Immediately Before the opening of Parentheses for a method's argument list
	```
	// Correct Way:
	doFlip(jump, rotate);

	// Wrong Way:
	doBarrelRoll (elevation, direction, rotation);
	```
- Immediately Before and After some kind of Arrow Function/Operator, Pointer and others which resemble the appearance of an arrow
	```
	// Correct Way:
	fn($sum) => 1 + 2;    // PHP

	def munge() -> PosInt: ...    // Python

	cout << "Pizza";    // C++

	----------------------------------------
	
	// Wrong Way:
	fn($sum)=>1 + 2;    // PHP

	def munge()->PosInt: ...    // Python

	cout<<"Pizza";    // C++
	```


<div style = "page-break-after: always;"></div>

## Brace Style
- Braces (AllMan Style).
- Empty Code Blocks.

<div style = "page-break-after: always;"></div>

## Error Handling
- Exceptions.
- Error Messages.
- Finally Blocks.

<div style = "page-break-after: always;"></div>

## Commenting and Documentation
#### Inline Comments
- **Purpose:** Explain specific sections of code that might not be immediately clear or intuitive.
- **Placement:** Place comments directly above the code. You are allowed to write them beside the code, just make sure it doesn't mess with its readability.
- **Content:** Keep it simple and straight to the point. Explain, why the following code line was made for.
**Do**
```
// Checks if theres a connection before accessing the dashboard.
if (isConected)
	showDashboard();
```
**Don't**
```
// Checks if theres a connection.
if (isConected) // Checks the Bool variable "isConnected".
	showDashboard(); // Calls the method "showDashboard".
```

#### Block Comments.
- **Purpose:** Used for multi-line explanation, often used for larger chunks of code like algorithms.
- **Placement:** Place comments directly above the code. **DON'T** even try to put it beside the code.
- **Content:** Explain the *WHY*, the logic behind it and key steps of the code. Avoid stating the obvious and don't over-explain the functionality.
- **Style:** The beginning and the end of the block comment must have an empty comment line so it doesn't interfere with the readability of the code. Begin each line with an asterisk ("\*") , numeral sign ("#") or one of the *characters supported* by the language to highlight that said section is a block comment.
**Examples:**
```
/*
* -Example in C#-
* Calculate the user's age based on their birthday.
* The method takes the current date and substracts the birthday.
* Date format for both (dd/mm/yyyy).
* It also checks if the birthday has already passed this year.
*/
public int calculateAge(birthday)
{
	// Code Logic...
}
```

---

```
#
# -Example in Python-
# Calculate the user's age based on their birthday.
# The function takes the current date and substracts the birthday.
# Date format for both (dd/mm/yyyy).
# It also checks if the birthday has already passed this year.
#
function calculateAge(birthday)
{
	// Code Logic...
}
```

---

#### Method/Function Documentation
- **Purpose:** Describe the purpose of the method/function.
- **Placement:** Place comments directly above the methods/functions. 
- **Content:** Class name, Brief description, Details, Authors, Parameters and Returns.
- **Style**: It's a bit different from our standard block comments, since these will go on our documentation files. These will follow the Doxygen's format for comments: /** \*/* For most Languages; """ """ For Python. Also, make sure to use Doxygen's tags for these kind of comments.
**Examples:**
```
/**
* Class name:
* @name Geometry
*
* Details:
* @details If needed.
*
* Purpose:
* @brief Calculates the area of a rectangle.
*
* Author/s:
* @author Danger Man
*
* Parameter/s:
* @param float width - The width of the rectangle.
* @param float height - The Height of the rectangle.
*
* Returns:
* @returns float result 
*/
```

---

```
"""
 -Python Variation-

 Class name:
 @name Geometry_Class

 Details:
 @details If needed.

 Purpose:
 @brief Calculates the area of a rectangle.

 Author/s:
 @author Danger Man

 Parameter/s:
 @param float width - The width of the rectangle.
 @param float height - The height of the rectangle.

 Returns:
 @returns float result
"""
```

#### Class Documentation
It's pretty similar to the method/function kind of documentation, it just changes the content of the comment block.
**Purpose:** Describe the class, its purpose, and important methods or properties.
**Content:** Namespace, Brief description, Details, Authors, TODOs, Global variables, Important Methods, Warnings, Deprecated code blocks.
**Example:**
```
/**
* Namespace:
* @namespace [feature name]
*
* Purpose:
* @brief Class used to represent a circunference.
*
* Details:
* @details If needed
*
* Author/s:
* @author Danger Man
*
* TODOs:
* @todo Implement error handling for negative dimensions.
*
* Global Parameters:
* @param float Pi
*
* Important Methods/Functions:
* @see calculateAreaV2() for calculating the Area of a Circunference.
* 
* Warnings:
* @warning Negative dimensions may lead to incorrect results.
* 
* Deprecated:
* @deprecated The Method calculateArea will be removed in version 2.0. Use      *              calculateAreaV2() instead.
*/
```

<div style = "page-break-after: always;"></div>

## Code Structure and Modularity
#### Separation of Concerns
- Single Responsibility Principle (SRV): Each Module, Function or Method should do only one thing and do it well. **DO NOT** add more than one functionality to them.
- Layers of Abstraction: Separate UI, Logic, Data, etc. Layers. In our case, we'll be using MVC most of the time
- Encapsulation: Keep functionalities isolated in classes. This'll reduce interdependency and improve maintainability of the software.

#### Modularity
- Reusability: Write code in small, independent units that can be reused in different parts of the application.
- Interfaces: Define clear input and output modules, this will reduce the need for internal changes in case of external issues.

#### File and Folder Structure
First of all, as you should know, we'll be using the MVC design pattern, which contains Models, Views and Controllers. To handle that, we'll be using a folder structure like this one:

<div class = "twoColumns">
<img src = "C:\Users\weiss\Downloads\Structure_Open.png" style = "zoom: 60%; margin-left: 150px;">
<br>
<br>
<br>
<p>
	/App: All classes related to the Application.<br><br>
	/Config: Contains Application's configuration files<br><br>
	/Database: Contains Database dumps.<br><br>
	/Public: Contains the front controller and assets.<br><br>
	/Src or /Source: Contains all Core classes.
</p>
</div>

<div style = "page-break-after: always;"></div>

## Error and Log Handling
- Logging.
- Return Values.
- Exception Handling.

<div style = "page-break-after: always;"></div>

## Unit Testing
#### Test Naming Conventions.
- Descriptive: Use descriptive names for test functions that clearly state what behavior is being tested.
- Structure: 
```
test_functionalityName_condition_expectedResult()

Example:
test_add_negativeNumbers_numbers()
```

#### Mock and Stubs
- Mocks: Use mock objects to replace external dependencies (like databases, network requests) so that unit tests focus on the behavior of the unit being tested.
- Stubs: Stubs provide fake data to isolate the unit of work.

#### Test Coverage
- Cover All Logic Branches: Ensure that your tests cover all conditional branches in your code (e.g., if-else, switch cases).
- Test Public Methods: Test the public API of your classes or functions, ensuring each method is properly covered.
- Avoid Over-testing Private Methods: While it’s tempting to test every single method, private/internal methods should generally not be directly tested. Instead, test them through the public interface.

<div style = "page-break-after: always;"></div>

## Code Reviews and Version Control
- Code Reviews.
- Version Control.

<div style = "page-break-after: always;"></div>

## Security Considerations
- Input Validation.
- Sensitive Data.
- Encryption.
- Authentication.

<div style = "page-break-after: always;"></div>

## Performance Consideration
- Efficient Algorithms.
- Memory Usage.
- Lazy Loading.
- Profiling.

<div style = "page-break-after: always;"></div>

## Refactoring and Clean Code
#### Refactoring
Refactoring is the process of improving the structure and readability of code without changing its external behavior. The goal is to make the code cleaner, more efficient, and easier to maintain.
**Guidelines for Refactoring:**
- **Small Functions:** Break down large functions into smaller ones that perform a single task.
- **Descriptive Naming:** Use clear, descriptive names for functions, variables, and classes.
- **DRY Principle (Don’t Repeat Yourself):** Avoid code duplication by abstracting repeated code into functions or classes.
- **SOLID Principles:** Apply SOLID principles (Single Responsibility, Open/Closed, Liskov Substitution, Interface Segregation, Dependency Inversion) to improve code design.
- **Code Comments:** Eliminate unnecessary comments by making the code itself self-explanatory.
- **Encapsulation:** Hide internal details and only expose what is necessary.
- **Tests:** Ensure existing functionality is covered with unit tests before refactoring. Tests should pass after refactoring to ensure no functionality is broken.
#### Dead Code
Dead code refers to parts of the codebase that are never executed or no longer needed. It may have been left behind after a change or due to incomplete cleanup.
**How to Handle Dead Code:**
- **Identify Dead Code:** Use static code analysis tools to find dead code. Look for unused variables, functions, or unreachable code.
- **Remove it:** If code is not needed and does not serve any purpose, delete it. Removing dead code simplifies the codebase and reduces maintenance overhead.
- **Version Control:** Use version control (e.g., Git) to safely remove dead code. If needed, it can be restored from previous commits.
- **Avoid Commenting Out:** Avoid leaving commented-out blocks of dead code. Instead, rely on version control if the code needs to be referenced later.

#### Magic Numbers.
Magic numbers are hard-coded values in your code with no explanation of what they represent, making the code unclear and harder to maintain.
**How to Handle Magic Numbers:**
- **Use Constants:** Replace magic numbers with named constants.
- **Self-Documenting Names:** The constant name should describe the purpose of the value. This improves code readability.
- **Domain-Specific Constants:** If the magic number is related to a specific domain or business logic, make sure the name reflects that.

#### Code Smells.
A "code smell" is a sign that something may be wrong with your code, even though it may still function correctly. Code smells often indicate deeper problems and can lead to technical debt.
 **Common Code Smells and How to Fix Them:**
- **Long Methods/Functions:** Break them down into smaller methods that each handle one task (Single Responsibility Principle).
- **Large Classes:** Apply the **Single Responsibility Principle** and extract functionality into smaller classes.
- **Duplicate Code:** Refactor repeated code into reusable methods or classes.
- **Feature Envy:** If a method in one class interacts more with another class, move the method to the class it interacts with.
- **Excessive Comments:** Remove excessive comments and make the code itself clear through proper naming and structure.
- **Too Many Parameters:** Use objects or data structures to group related parameters, reducing the number of arguments passed to functions.
- **Switch Statements:** Use polymorphism (via interfaces or subclasses) instead of large switch statements when appropriate.

<div style = "page-break-after: always;"></div>

## Tooling and Automation
#### Linters.
Linters are tools that analyze your code for potential errors, style violations, and suspicious constructs. They help enforce coding standards and detect issues before they become bugs.
 **Guidelines for Using Linters:**
- **Set up Early:** Integrate a linter into your development process as early as possible to enforce consistency.
- **Use Standard Rulesets:** Many languages have default rulesets for linters. Stick to these standards unless your project requires specific rules.
- **Customize for the Project:** If needed, customize linter configurations to match the team’s coding style.
- **Run Regularly:** Run linters automatically on save, commit, or as part of your CI/CD pipeline to catch issues early.
- **Fix Warnings/Errors:** Address all linter warnings and errors to maintain code quality. In some cases, you can disable certain rules, but do this sparingly.

In our case we'll be using the following linters:
-

#### Formatting Tools.
Formatting tools automatically adjust the layout and style of your code to ensure it follows consistent formatting rules. They eliminate arguments about code style by enforcing predefined formatting conventions.
#### **Guidelines for Formatting Tools:**
- **Predefined Styles:** Use standard formatting styles, like **PEP 8** for Python or **Prettier** for JavaScript, to maintain consistency across the codebase.
- **Automate Formatting:** Set up auto-formatting in your IDE or editor to ensure code is consistently formatted before it’s committed.
- **Integration with Linters:** Some linters include formatting checks, so use them together to enforce both code quality and style.
- **Customize Only When Necessary:** Use default configurations unless the project has specific requirements for code style.

#### Documenting Tools.
Documenting tools help generate or manage project documentation and code comments. These tools ensure that code is easily understandable and maintainable by developers over time.
#### **Guidelines for Documenting Tools:**
- **Inline Comments:** Write clear, concise inline comments for complex or non-obvious code logic. Avoid redundant comments for self-explanatory code.
- **Docstrings:** Use docstrings for functions, classes, and modules to explain their purpose, inputs, outputs, and behavior. Docstring formats like **Google-style** or **reStructuredText** are commonly used.
- **Generate API Documentation:** Use tools to automatically generate API documentation from code annotations.
- **Keep Documentation Updated:** Regularly review and update documentation to reflect changes in the code.

In our case we'll be mainly using **Doxygen**

#### Continuous Integration.
Continuous Integration (CI) is a development practice where developers frequently merge code changes into a shared repository. Automated builds and tests are triggered by these merges to catch integration issues early.
#### **Guidelines for Continuous Integration:**
- **Automated Testing:** Set up unit tests, integration tests, and end-to-end tests that run automatically on each code merge.
- **Frequent Commits:** Encourage frequent code commits to the main branch, keeping integration problems small and easier to resolve.
- **Fast Feedback:** Ensure CI pipelines are fast and provide quick feedback to developers when issues arise.
- **Use Linting and Formatting in CI:** Incorporate linters and formatting tools in the CI pipeline to enforce code quality and style consistency.
- **Deployments:** Optionally, extend CI with Continuous Deployment (CD), where code changes are automatically deployed to staging or production environments if tests pass.

<div style = "page-break-after: always;"></div>


