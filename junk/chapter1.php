<?php
  session_start();
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

  <nav>
      <div class="wrapper">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../topics.php">Topics</a></li>
          <?php
            if(isset($_SESSION["useruid"])) {
              echo "<li><a href='../includes/logout.inc.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='../signup.php'>Sign Up</a></li>";
              echo "<li><a href='../login.php'>Log In</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>

<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color: #666;
  padding: 2px;
  text-align: center;
  font-size: 35px;
  color: white;
}

nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 20px;
}

article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

}
</style>
</head>
<body>

<header>
  <h2>Chapter 1 - Processor Components</h2>
</header>
  
  <article>
    <h1>CPU, CU and ALU</h1>
    <p>CPU stands for 'Central Processing Unit'. The CPU is the primary component of a computer that processes instructions. It runs the operating system and applications, constantly receiving input from the user or active software programs.</p>
    <p>CU stands for 'Control Unit' and is an integrated circuit in a processor that controls the input and output. It receives instructions from a program, then passes them to the arithmetic logic unit ALU.</p>
    <p>ALU stands for 'Arithmetic Logic Unit' and is a digital circuit that is used to perform arithmetic and logic operations. It represents the fundamental building block of the central processing unit of a computer. Modern CPUs contain very powerful and complex ALUs.</p>
  </article>
</section>

  <article>
    <h1>Registers</h1>
    <p>Registers are a type of computer memory used to quickly accept, store, and transfer data and instructions that are being used immediately by the CPU. The registers used by the CPU are often termed as Processor registers.</p>
    <p>PC stands for 'Program Counter' and is a CPU register in the computer processor which has the address of the next instruction to be executed from memory. It is a digital counter needed for faster execution of tasks as well as for tracking the current execution point.</p>
    <p>CIR stands for 'Current Instruction Register' and holds the instruction that is currently being decoded and executed.</p>
    <p>ACC stands for 'Accumulator' and it holds the data being processed and the results of processing.</p>
    <p>MAR stands for 'Memory Address Register' and is the CPU register that either stores the memory address from which data will be fetched to the CPU, or the address to which data will be sent and stored.</p>
    <p>MDR stands for 'Memory Data Register' and is a register that has a storage space for units of memory that are used to transfer data for immediate use by the CPU for data processing. Also known as memory registers, they can actually form part of the computer processor as a processor register.</p>
  </article>
</section>

  <article>
    <h1>Buses</h1>
    <p>A bus is a high-speed internal connection. Buses are used to send control signals and data between the processor and other components.</p>
    <p>The address bus allows the CPU to send the address to RAM, and the data bus allows the actual data transfer to the CPU.</p>
    <p>The data bus is a system within a computer or device, consisting of a connector or set of wires, that provides transportation for data. Different kinds of data buses have evolved along with personal computers and other pieces of hardware.</p>
    <p>The control bus is a computer bus that is used by the CPU to communicate with devices that are contained within the computer. This occurs through physical connections such as cables or printed circuits.</p>
  </article>
</section>

<article>
    <h1>Fetch-Decode-Execute Cycle</h1>
    <p>The main job of the CPU is to execute programs using the fetch-decode-execute cycle.This cycle begins as soon as you turn on a computer. To execute a program, the program code is copied from secondary storage into the main memory. The CPU's program counter is set to the memory location where the first instruction in the program has been stored, and execution begins. The program is now running.
       In a program, each machine code instruction takes up a slot in the main memory. These slots (or memory locations) each have a unique memory address. The program counter stores the address of each instruction and tells the CPU in what order they should be carried out.
       When a program is being executed, the CPU performs the fetch-decode-execute cycle, which repeats over and over again until reaching the STOP instruction.</p>
      
    <p>Summary of the fetch-decode-execute cycle
      The processor checks the program counter to see which instruction to run next.
      The program counter gives an address value in the memory of where the next instruction is.
      The processor fetches the instruction value from this memory location.
      Once the instruction has been fetched, it needs to be decoded and executed. For example, this could involve taking one value, putting it into the ALU, then taking a different value  from a register and adding the two together.
      Once this is complete, the processor goes back to the program counter to find the next instruction.
      This cycle is repeated until the program ends.</p>
  </article>
</section>

</body>
</html>