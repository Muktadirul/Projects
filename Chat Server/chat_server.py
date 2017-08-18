#Headres 
import sys
import socket
import select
#Global Variables
HOST = '' 
SOCKET_LIST = []
RECV_BUFFER = 4096 
PORT = 9009

#Functions
def chat_server():
    server_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM) # Creating Socket
    server_socket.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1) #Can Recreat Connection
    server_socket.bind((HOST, PORT)) # Binding port and ip address
    server_socket.listen(10)# Listening

    SOCKET_LIST.append(server_socket)# add name to to socket list array

    print "Chat server started on port " + str(PORT)

    #Now Server is on for infinite time
    while 1:
        # Can add any number of Clients
        ready_to_read,ready_to_write,in_error = select.select(SOCKET_LIST,[],[],0)
        for sock in ready_to_read:
            # a new connection request recieved
            if sock == server_socket: 
                sockfd, addr = server_socket.accept()
                SOCKET_LIST.append(sockfd)
                print "Client (%s, %s) connected" % addr
                broadcast(server_socket, sockfd, "[%s:%s] entered our chatting room\n" % addr)  
            #try to recv msg from clients
            else:
                 try:   
                    data = sock.recv(RECV_BUFFER)
                    if data:  
                        broadcast(server_socket, sock, "\r" + '[' + str(sock.getpeername()) + '] ' + data)  
                    else:        
                        if sock in SOCKET_LIST:
                            SOCKET_LIST.remove(sock)
                        broadcast(server_socket, sock, "Client (%s, %s) is offline\n" % addr)
                except:
                    broadcast(server_socket, sock, "Client (%s, %s) is offline\n" % addr)
                    continue
    server_socket.close()
    
#Broadcasting Message to all Clients
def broadcast (server_socket, sock, message):
    for socket in SOCKET_LIST:
        if socket != server_socket and socket != sock :
            try :
                socket.send(message)
            except :
                socket.close()
                if socket in SOCKET_LIST:
                    SOCKET_LIST.remove(socket)

#Main Functions
if __name__ == "__main__":
    sys.exit(chat_server())