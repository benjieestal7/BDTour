using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;
using MySql.Data.MySqlClient;
using RestSharp;
using bdtour;
using System.Windows.Forms;
using bdtour.Core;

namespace bdtour.Dal
{
    class PageCount
    {
        public static string GetPageCountErrorMessage = string.Empty;
        public static bool GetPageCountAllDataIsSuccessfull = true;
        public static DataTable GetPageCountAll()
        {
            DataSet dt = new DataSet();
            try
            {
                PublicVariables.ClientGlobal = new RestClient(PublicVariables.APIBaseURL + "page_count/get");
                //PublicVariables.ClientGlobal.Authenticator = new HttpBasicAuthenticator(PublicVariables.APIAuthUsername, PublicVariables.APIAuthPassword);

                PublicVariables.RequestGlobal = new RestRequest(Method.GET);
                //PublicVariables.RequestGlobal.AddHeader(PublicVariables.APIKeyHeader, PublicVariables.APIKey);

                PublicVariables.RequestGlobal.AddHeader("content-type", "application/x-www-form-urlencoded");

                PublicVariables.ResponseGlobal = PublicVariables.ClientGlobal.Execute(PublicVariables.RequestGlobal);
                string content = PublicVariables.ResponseGlobal.Content;

                if (content.Contains("No data found"))
                {
                    GetPageCountAllDataIsSuccessfull = false;
                    GetPageCountErrorMessage = content;
                    return null;
                }
                else if (content.Contains("Error has occured"))
                {
                    GetPageCountAllDataIsSuccessfull = false;
                    GetPageCountErrorMessage = content;
                    return null;
                }

                DataTable tableX = StringManipulation.JsonStringToDatatable(content);
                GetPageCountAllDataIsSuccessfull = true;

                return tableX;
            }
            catch (Exception ex)
            {
                GetPageCountAllDataIsSuccessfull = false;
                GetPageCountErrorMessage = ex.Message + "\nFunction : Get";
                MessageBox.Show("Error Getting data in Database!");
                return null;
            }

        }

    }
}
