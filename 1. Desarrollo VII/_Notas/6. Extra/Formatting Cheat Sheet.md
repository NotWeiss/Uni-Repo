# Formatting Cheat Sheet

Cheat Sheet for everything about formatting text and notes for Markdown powered text editors (in this case, it's made mainly for Obsidian). Also includes HTML tags, CSS and other languages' things that can or could be handy for these editors.

Before going forward, just remember that indentation is actually a powerful tool that can be used in Markdown, so make sure to use it, specially if you think that you can't use a specific syntax because of shenanigans.
## Basic Formatting Syntax 
All Markdown applications support these elements.

|                 Element                 |                                                                       Description                                                                       |                        Syntax                         |                                                                               Result                                                                                |
| :-------------------------------------: | :-----------------------------------------------------------------------------------------------------------------------------------------------------: | :---------------------------------------------------: | :-----------------------------------------------------------------------------------------------------------------------------------------------------------------: |
|            <br />**Heading**            |                                                             <br />It gives the text a size.                                                             |              # H1<br />## H2<br />### H3              |                                                                    <br />See title for reference                                                                    |
|                **Bold**                 |                                                                    Makes text bold.                                                                     |                     \*\*Text\*\*                      |                                                                              **Text**                                                                               |
|               **Italic**                |                                                                   Makes text italic.                                                                    |                       \*Text\*                        |                                                                               *Text*                                                                                |
|            **Strikethrough**            |                                                               Makes a line over the text.                                                               |                     \~\~Text\~\~                      |                                                                              ~~Text~~                                                                               |
|       <br /><br />**Blockquote**        | Creates a block contained paragraph, can be nested adding more iterations of the symbol, and can be one after the other to create multiline paragraphs. |      <br />\> Text<br /> \> Text <br />\>\> Text      |                                                       <br /><br />See footnote for the output. [^Blockquote]                                                        |
|            **Ordered List**             |                                                      Creates a numbered list. Can be instantiated.                                                      |           1. Text<br />2. Text<br />3. Text           |                                                             <br />See footnote for the output. [^List]                                                              |
|           **Unordered List**            |                                                           Creates a list without enumeration.                                                           |            - Text<br />- Text<br />- Text             |                                                            <br />See footnote for the output. [^UnList]                                                             |
|             **Code/Embed**              |                                                              Embeds text into a codeblock.                                                              |                     \`Paragraph\`                     |                                                                     `console.println('Hello');`                                                                     |
|        <br />**Horizontal Rule**        |                                                   <br />Creates a horizontal divider along the note.                                                    | \*\*\*<br />\-\-\-<br />\_\_\_<br />\_\_\_\_\_\_\_... |                                                             <br />Can be seen after the next paragraph.                                                             |
|             <br />**Link**              |                                              Creates a link to a website/note/folder/<br />vault/file/etc.                                              |                <br />\[Title\]\(Link\)                |                                                        <br />[MarkdownGuide](https://www.markdownguide.org)                                                         |
| <br /><br /><br /><br /><br />**Image** |                                              <br /><br /><br /><br /><br />Attaches an Image to the note.                                               | <br /><br /><br /><br /><br />\!\[Title\]\(path/url\) | ![Grimoire Weiss](https://static.wikia.nocookie.net/nier/images/2/2c/Render_de_Grimoire_Weiss_-_NieR_Automata.png/revision/latest?cb=20180807145340&path-prefix=es) |
|               **Comment**               |                                                        Creates a comment only for Editing view.                                                         |                  \%\%I'm sleepy\%\%                   |                                                           You wont be able to see it %%Only for Editor%%                                                            |

You can also refer to [MarkdownGuideBasic](https://www.markdownguide.org/basic-syntax/#overview) for further explanation. Also, make sure to read the editor view of this document, there are some good examples as well.

## Extended Formatting Syntax
Not all Markdown applications support these elements.

| Element | Description | Syntax | Result |
| :-----------: | :-----------: | :-----------: | :-----------: |
| **Table** | Creates a table. | Check Editor. Too complex | You've been seeing it. |
| <br />**Fenced Code Blocks** | <br />Bigger Embed/Code block | \`\`\`<br />content<br />\`\`\` | <br />See footnote.[^CodeBlock]|
| <br />**Footnote** | <br />Creates a link to a footnote with the same name. | Sentence with it.\[\^name\]<br />\[\^name\]: The Footnote | <br />See last. |
| **Task List** | Creates a List with checkboxes. | \- \[ \] Text. | See footnote.[^TaskList] |
| **Highlight** | Highlights text | \=\=Text\=\= | ==Text== |
| **Callouts** | Creates a callout for a blockquote | > \[\!info\] | See footnote.[^Callout] |
| **Diagrams** | [MermaidDiagrams](https://mermaid.js.org/syntax/examples.html) | <- | <- |

There are more elements that weren't mentioned here because at the time I couldn't make them work in Obsidian, so this could be updated in the future. You can also refer to [MarkdownGuideExtended](https://www.markdownguide.org/extended-syntax/#overview) for further explanation. Again, make sure to read the editor view of this note, maybe it can help you as well.

---

## Using HTML
So, as most Markdown powered applications, Obsidian also supports HTML tags for the formatting of your notes, I'll review the tags I thing are the most important and then I'll be updating this list.



[^Blockquote]: > Lorem ipsum dolor sit amet, consectetur adipiscing elit.e
[^List]: 
	>1. Apple.
	>2. Pen.
	>	1. Pencil.
	>	2. Eraser.
	>3. Pineapple.
[^UnList]: 
	>- Goldfish.
	>	- Tropical Fish.
	>	- Nemo.
	>- Cod.
	>- Salmon.
[^CodeBlock]:
	```
	{
		"Firstname" : "John"
		"Lastname" : "Smith"
		"Age" : 25
	}
	```
	Appears bugged in editor btw.
[^TaskList]:
	>- [ ] Task 1
	>- [ ] Task 2
	>- [ ] Task 3
[^Callout]:
	> [!info]
	> There are more than 1 kind of callout
	> Make sure to try: 
	>> [!note] !Notes
	>>> [!question] !Faq
	>>>> [!tip] !Tip
	> [CallOutTypes](https://help.obsidian.md/Editing+and+formatting/Callouts)  I wont write every type of  Callout.