<%@ page language="java" import="java.sql.*"%>

<%

    String name = request.getParameter("name");

    String phno = request.getParameter("phno");

    String email = request.getParameter("email");

    String message = request.getParameter("message");



    try {

        Class.forName("com.mysql.jdbc.Driver");

        Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/fruit", "root", "");

        PreparedStatement ps = con.prepareStatement("insert into contact values(?,?,?,?)");

        ps.setString(1, name);

        ps.setString(2, phno);

        ps.setString(3, email);

        ps.setString(4, message);


        ps.executeUpdate();

        response.sendRedirect("http://localhost/theend.html");

    } catch (Exception e) {

        out.println(e);

    } 

%>