#!/usr/bin/env python

import urllib2
import SimpleHTTPServer
import SocketServer

httpd = SocketServer.TCPServer(("127.0.0.1", 9000), SimpleHTTPServer.SimpleHTTPRequestHandler)

httpd.serve_forever()