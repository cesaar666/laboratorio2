<?php
                    include('config.php');
                    session_start();
  
                    if (isset($_POST['login'])) {
                        $user = $_POST['usuario'];
                        $password = $_POST['password'];
  
                        $query = $conn->prepare("SELECT * FROM usuarios WHERE username=:username");
                        $query->bindParam("username", $user, PDO::PARAM_STR);
                        $query->execute();
  
                        $result = $query->fetch(PDO::FETCH_ASSOC);
  
                        if (!$result) {
                            header("location: index.php");
                        } else {
                            if (password_verify($password, $result['password'])) {
                                $_SESSION['user_id'] = $result['id'];
                                header("location: inicio.php");
                            } else {
                                header("location: index.php");
                            }
                        }
                    } 
                ?>