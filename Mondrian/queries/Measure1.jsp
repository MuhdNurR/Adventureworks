<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
    <%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
        <%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>

            <jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver"
                jdbcUrl="jdbc:mysql://localhost/adventureworksetl_1?user=root&password="
                catalogUri="/WEB-INF/queries/Measure1.xml">

                SELECT {[Measures].[SubTotal],[Measures].[Freight]} ON COLUMNS,
                {(
                [time].[All Times],
                [territory].[All Territory],
                [reason],
                [product].[All Products]
                )} ON ROWS
                FROM [Jual]

            </jp:mondrianQuery>
            <c:set var="title01" scope="session">Adventureworks CUBE</c:set>